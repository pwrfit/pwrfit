<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'documento' => ['required', 'integer', 'min:8', 'unique:usuarios'],
            'membresia' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terminos' => ['accepted'],
        ]);

        if ($request->boletin) {
            $user = User::create([
                'nombre' => $request->nombre,
                'documento' => $request->documento,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'boletin' => 'SI',
                'membresia' => '1',
                'pago' => 'SIN COMPLETAR',
            ]);
        }else {
            $user = User::create([
                'nombre' => $request->nombre,
                'documento' => $request->documento,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'membresia' => '1',
                'pago' => 'SIN COMPLETAR',
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
