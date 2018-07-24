<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Balance extends Model
{
    //
    public $timestamps = false;
    
    public function deposit($value){
        
        $this->amount += $value;
        $this->save();
    }
}
