<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        

        $this->validate($request, [
            'name'     => 'required|max:200|min:5',
            'username' => 'required|max:20|min:5',
            'email'    => 'required|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email','password'));
        

        return redirect()->route('dashboard');

        
    }
}
