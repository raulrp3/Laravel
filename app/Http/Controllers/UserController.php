<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        return 'Users';
    }

    public function usersDetail($id){
        return "User: {$id}";
    }

    public function usersNew(){
        return 'New user';
    }
}
