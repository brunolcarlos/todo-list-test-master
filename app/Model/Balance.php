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
        $value = $this->amount += $value;
        $totalBefore = $this->amount ? $this->amount : 0 ;
        $historicTransaction = auth()->user()->historics()->create([
            'type'        => 'I',
            'amount'      => $value,
            'total_before'=> $totalBefore,
            'total_after' => $value,
            'date'        => date('Ymd')
            ]);
            
            
            $ifSave = $this->save();

            if($historicTransaction and $ifSave){

                DB::commit();
                return [
                    'success' => true,
                    'typeMessage' => 'Thanks for add credit',
                ];

            }else{
                DB::rollback();
                return [
                    'success' => false,
                    'typeMessage' => 'Something is wrong',
                ];
            }
        }
    }
    