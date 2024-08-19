<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\roles;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'telephone' => 'required|integer',
            'password' => 'required|confirmed',
            'adresse' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'identite' => 'required|image|mimes: jpg,png,jpeg|max:2048',
        ]);
        $IdentitePath = null;
        if ($request->hasFile('identite')) {
           $IdentitePath = $request->file('identite')->store('identites', 'public');
        }
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'profession' => $request->profession,
            'identite' => $IdentitePath,
            'admin'=>0
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(route('login', absolute: true));
    }
}
