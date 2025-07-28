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

    public function index()
    {
        $users = User::orderByRaw('id')->paginate(1);

        return view('users.index', ['users' => $users]);
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
            return back()->withInput()->with('error', 'Failed to create user!');
        }
    }

    public function edit(User $User)
    {
        return view('users.edit', ['user' => $User]);
    }

    public function update(UserRequest $request, User $user)
    {
        try {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            return redirect()->route('user.edit', ['user' => $user->id])->with('success', 'User updated successfully!');

        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Failed to update user!');
        }
    }
}
