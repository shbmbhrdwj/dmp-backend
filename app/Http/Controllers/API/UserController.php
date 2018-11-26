<?php

namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //


    //TODO Use auth token
    public function register(Request $request)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->rating = 0;
        $user->save();
        return ["status" => 0];


    }


    public function login(Request $request)
    {

        $users = User::where("email", $request->email)->get();
        if (count($users) == 0)
            return ["status" => -1, "message" => "Invalid User ID/Password"];
        if (Hash::check($request->password, $users->first()->password))
            return ["status" => 0, "message" => "succesfully logged in"];
        else return ["status" => -1, "Invalid User ID/Password"];
    }


}
