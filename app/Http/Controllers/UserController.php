<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        $users = [
            'Raúl',
            'Daniel',
            'Ginés',
            'Agustina'
        ];

        return view('Users', [
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);
    }

    public function usersDetail($id){
        return "User: {$id}";
    }

    public function usersNew(){
        return 'New user';
    }
}
