<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Auth\UserRecord;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register1');
    }

    public function register(Request $request)
    {
        // dump($request->all());
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create user in Firebase Authentication
        $auth = Firebase::auth();
        
        $userProperties = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Register user
        /** @var UserRecord $user */
        $user = $auth->createUser($userProperties);
        // Accessing properties
        $uid = $user->uid;
        $email = $user->email;
        $emailVerified = $user->emailVerified;
        $displayName = $user->displayName;
        // Authenticate user after registration
        $auth->signInWithEmailAndPassword($request->email, $request->password);

        // Redirect to the page after registration
        return redirect('/landingPage')->with('userdata', compact('uid', 'email', 'emailVerified', 'displayName'));
    }
}
