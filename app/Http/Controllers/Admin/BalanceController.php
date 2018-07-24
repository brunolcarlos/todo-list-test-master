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

        $balance = auth()->user()->balance()->firstOrCreate([]);
        $balance->deposit($request->value);
        return view('admin.balance.store');
    }

}
