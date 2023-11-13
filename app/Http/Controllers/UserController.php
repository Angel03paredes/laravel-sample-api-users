<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // get all users
    public function getAll(){
        $users = User::all();
        return response()->json($users,200);
    }

    public function getById($id){
        $user = User::find($id);
        return response()->json($user,200);
    }

    public function add(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->password = $req->password;
        $result = $user->save();
        return response()->json($result,200);
    }
}
