<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function users(){
        $users = User::all();

        return view('Users', [
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);
    }

    public function usersDetail(User $user){
        if ($user == null){
            return view('Error404');
        }

        return view('UsersDetail', [
            'user' => $user
        ]);
    }

    public function usersNew(){
        return view('UsersNew');
    }
}
