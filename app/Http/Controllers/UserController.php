<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
class UserController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        if ($request->ajax()){
            return DataTables::of($users)->make(true);
        }
        return view('users', [
            'users'=>$users
        ]);
    }
}
