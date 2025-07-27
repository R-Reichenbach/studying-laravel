<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function index(){
       $users = User::orderByDesc('id')->paginate(10);

        return view('users.index', ['users'=> $users]);
    }

    public function store(UserRequest $request)
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
