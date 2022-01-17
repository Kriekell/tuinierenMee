<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function showAllUsers()
    {
        return response()->json(User::all());
    }

    public function showOneUser($id)
    {
        return response()->json(User::find($id));
    }

    public function createUsers(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function updateUsers($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function deleteUsers($id)
    {
        User::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}