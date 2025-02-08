<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        // validate
       $validated = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // try to log in

       if (! Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
       }
        // regenerate the session token
        request()->session()->regenerate();


        return redirect('/jobs');
    }

    public function destroy() {
        Auth::logout();

        return redirect('/');
    }
}
