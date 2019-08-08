<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        if (request()->has('empty')){
            $users = [];
        }else{
            $users = [
                'Raúl', 'Daniel', 'Ginés', 'Agustina'];
        }

        return view('Users', [
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);
    }

    public function usersDetail($id){
        return view('UsersDetail', [
            'id' => $id
        ]);
    }

    public function usersNew(){
        return view('UsersNew');
    }
}
