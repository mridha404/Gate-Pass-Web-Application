<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }


 public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'The provided email address is not registered.',
            ]);
        }

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'password' => 'The provided password is incorrect.',
            ]);
        }

        $request->session()->regenerate();

       // Check if the user is a super admin
    if ($user->name === 'Super Admin') {
        // Redirect the super admin to the registration page

     return redirect()->route('users.index')->with('message', 'Welcome Super Admin!');

    } else {
        // Redirect regular users to the login page with incorrect credentials error
        return redirect('/login')->withErrors([
            'password' => 'The provided credentials are incorrect.',
        ]);
    }

    }

    public function destroy()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out.');
    }


}
