<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }

    public function show(User $user, Request $request)
    {

    }

    public function edit(User $user, Request $request)
    {
        return view('admin.users.edite', compact('user'));
    }

    public function update(User $user, Request $request)
    {

    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back()->with(['message' => 'success']);
    }

    public function delete(User $user, Request $request)
    {
        if (!Auth::check($user))
            $user->delete();
        else
            return redirect()->back()->withErrors('the user is logged in');
    }
}
