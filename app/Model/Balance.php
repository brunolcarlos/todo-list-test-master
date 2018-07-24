<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Balance extends Model
{
    //
    public $timestamps = false;
    
    public function deposit($value){
        $totalBefore = $this->amount;
        $historicTransaction = auth()->user()->historics()->create([
            'type'        => 'I',
            'amount'      => $value,
            'total_before'=> $totalBefore,
            'total_after' => $this->amount += $value,
            'date'        => date('Ymd')
            ]);
            
            $this->amount += $value;
            $this->save();
        }
    }
    