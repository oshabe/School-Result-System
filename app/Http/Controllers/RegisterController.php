<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{

    public function Index()
    {
        return view('auth.register');
    }

    public function SignUp(Request $request)
    {
        // Validate the user's input
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'roll_id' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users'),
            ],
            'password' => 'required|confirmed',
            
        ]);

        //dd($request);

    // Create a new user record in the database
        $user = new User();
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Log the user in
        //auth()->login($user);

        // Redirect the user to the dashboard or to their intended URL
        return redirect()->intended('/dashboard');
    }
}
