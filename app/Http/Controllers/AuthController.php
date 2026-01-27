<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show register page
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        try {
            // Create normal user
            $user = User::create([
                'name'     => $validated['name'],
                'email'    => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role'     => 'user', // default role
            ]);

            Auth::login($user);

            return redirect('/')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            \Log::error('Registration error: ' . $e->getMessage());

            return back()->withErrors([
                'error' => 'Registration failed. Please try again.'
            ]);
        }
    }

    // Show login page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login ( ADMIN FIX HERE)
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // ROLE BASED REDIRECT
            if (auth()->user()->role === 'admin') {
                return redirect('/admin/dashboard');
            }

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
