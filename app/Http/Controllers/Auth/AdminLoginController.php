<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Intentar iniciar sesión
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Si tiene éxito, redirigir a la ubicación prevista
            return redirect()->intended(route('admin.dashboard'));
        }

        // Si falla, redirigir de nuevo al login con los datos del formulario
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}