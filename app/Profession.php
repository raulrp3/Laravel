<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function users(){
        $this->hasMany(User::class);
    }
}
