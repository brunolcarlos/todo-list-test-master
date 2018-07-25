<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Balance;

class BalanceController extends Controller
{
    public function index(){


        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : '0';
        return view('admin.balance.index',compact('amount'));
    }

    public function deposit(){
        return view('admin.balance.deposit');
    }
    public function store(Request $request){
        
        $value = ((int)$request->value) ? (int)$request->value : 0 ;
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $balance->deposit((int)number_format($value, 2,',',''));
        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : '0';
    
        return redirect('admin/balance');
    }

}
