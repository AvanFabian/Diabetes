<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    
        // Create user in Firebase Authentication
        $userProperties = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        $user = Firebase::createUser($userProperties);
    
        // Otentikasi pengguna setelah registrasi
        Firebase::signInWithEmailAndPassword($request->email, $request->password);
    
        // Redirect ke halaman setelah registrasi
        return redirect('/')->with('userdata', $user);
    }
}
