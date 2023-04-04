<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UsersController extends Controller
{
    public function create(Request $request)
    {
        $validation=$request->validate([
            'email'=>'required|unique:users|email:rfc,dns',
            'password'=>'required',
            'level'=>'required|in:operator, pelanggan, pemilik',
        ]);

        $validation['password']=bcrypt($request->password);
        User::create($validation);
    }

    public function delete(User $user)
    {
        $user->delete();
    }

    public function update(User $user, Request $request)
    {
        $validation=$request->validate([
            'email'=>'required|unique:users|email:rfc,dns',
            'password'=>'required',
            'level'=>'required|in:operator, pelanggan, pemilik',
        ]);
        $user->update($validation);
    }
}
