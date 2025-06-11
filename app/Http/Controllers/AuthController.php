<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function redirectToDashboard()
    {
        $user = Auth::user();

        if (Gate::allows('admin', $user)) {
            return redirect()->route('admin.dashboard');
        }

        if (Gate::allows('user', $user)) {
            return redirect()->route('dashboard');
        }

        abort(403, 'Unauthorized action.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return $this->redirectToDashboard();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return $this->redirectToDashboard();
    }
}
