<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function appointments(){

        return $this->hasMany('App\Appointments');
    
    }
}
