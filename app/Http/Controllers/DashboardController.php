<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class DashboardController extends Controller
{
    public function create(): View
    {
        $users = User::all(); //->where('role', '!=', 'Admin');
        return view('dashboard', compact(['users']));
    }

    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'role' => ['required', 'string'],
            'zone' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'zone' => $request->zone,
            'password' => Hash::make($request->password),
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
