<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        // Buscar al administrador por email
        $admin = Admin::where('email', $request->email)->first();

        // Verificar si se encontró el administrador y la contraseña es correcta
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Iniciar sesión manualmente
            Auth::guard('admin')->login($admin);
            // Redirigir a la ubicación prevista
            return redirect()->intended(route('admin.dashboard'));
        }

        // Si falla, redirigir de nuevo al login con los datos del formulario
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}