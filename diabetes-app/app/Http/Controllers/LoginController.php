<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $auth = Firebase::auth();

        try {
            // Attempt to sign in the user
            $auth->signInWithEmailAndPassword($request->email, $request->password);
            // dd($request->email);
            // If successful, redirect to the desired page
            return redirect('/')->with('userdatalogin', $request->email);
        } catch (\Kreait\Firebase\Auth\SignIn\FailedToSignIn $exception) {
            // If sign-in fails, you may handle it accordingly
            // For example, you can redirect back to the login form with an error message
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        $auth = Firebase::auth();

        // Sign out the currently authenticated user
        $auth->signOut();

        // Redirect to the desired page after logout
        return redirect('/');
    }
}
