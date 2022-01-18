<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
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
//loginD-->Show User Email & Password
    public function getUserLogin()
    {
        $result = DB::select("SELECT users.id ,users.email , users.password FROM users ");
        return json_encode($result);
        // $result = DB::select("SELECT users.id , users.password FROM users WHERE users.email LIKE 'test@test.de' ");
        // return json_encode($result);
    }
//userD-->Show User "firstName", "lastName", "avatar", "roll" where users.id = {$id}
    public function showUser($id)
    {
        $result = DB::select("SELECT users.id ,users.firstName , users.lastName, users.avatar ,rolls.name as roll FROM rolls JOIN users ON rolls.id = users.roll_id WHERE users.id = {$id}");
        return json_encode($result);
    }

}
// $result = DB::select("SELECT authors.name AS auteur, books.name AS book, books.price FROM authors
// JOIN books ON authors.id = books.author_id");
// return json_encode($result);
// $result = DB::select("SELECT authors.name AS auteur, books.name AS book, books.price FROM authors
//         JOIN books ON authors.id = books.author_id WHERE authors.id = {$id}");
//         return json_encode($result);
//php -S localhost:8000 -t public
// php artisan