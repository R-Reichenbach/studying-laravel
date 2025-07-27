<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            return redirect()->route('user.create')->with('success', 'User created successfully!');
        } catch (Exception $e) {
            // Optionally, handle the exception or log it
            return back()->withInput()->with('error', 'Failed to create user!');
        }
    }
}
