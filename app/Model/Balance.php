<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Balance extends Model
{
    //
    public $timestamps = false;
    
    public function deposit($value){

        DB::beginTransaction();

        $totalBefore = $this->amount ? $this->amount : 0 ;
        $historicTransaction = auth()->user()->historics()->create([
            'type'        => 'I',
            'amount'      => $value,
            'total_before'=> $totalBefore,
            'total_after' => $this->amount += $value,
            'date'        => date('Ymd')
            ]);
            
            $this->amount += $value;
            $ifSave = $this->save();

            if($historicTransaction and $ifSave){

                DB::commit();

            }else{
                DB::rollback();
            }
        }
    }
    