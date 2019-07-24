<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function dentist(){
        return $this->belongsTo('App\Dentist');
    }

    public function patient(){

        return $this->belongsTo('App\Patient');
    
    }

    public function service(){
        
        return $this->belongsTo('App\Service');
    
    }
}
