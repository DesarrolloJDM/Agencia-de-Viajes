<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    // Crear una sesion
    public function create(): View 
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
{
    $credentials = $request->validate(
        [
            'email' => [
                'required',
                'email',
            ],
            'password' => [
                'required',
                'string',
            ],
        ],
    );

    if (! Auth::attempt(
        $credentials,
        $request->boolean('remember')
    )) {
        return back()
            ->withErrors([
                'credentials' => 'El correo electrónico o la contraseña son incorrectos',
            ])
            ->onlyInput('email');
    }

    $user = Auth::user();

    if ($user->status !== UserStatus::Active) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()
            ->withErrors([
                'status' => 'Tu cuenta está suspendida. Comunícate con el administrador',
            ])
            ->onlyInput('email');
    }

    $request->session()->regenerate();

    return redirect()->intended(
        route('admin.dashboard')
    );
}

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }
}
