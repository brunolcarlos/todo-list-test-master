@extends('adminlte::page')

@section('title', 'Balance')

@section('content_header')
<h1>Balance</h1>
<ol class="breadcrump">
    <li><a href="">Dashboard</a></li>
</ol>
@stop

@section('content')
<div class="box mybox">
    <div class="box-header">
        <a href="{{ route('balance.deposit')}}" class="btn btn-primary">Buy credits</a>
        <a href="" class="btn btn-danger">Withdraw</a>
    </div>
    <div class="box-body">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><sup style="font-size: 20px">$</sup>{{ number_format($amount, 2,',','.') }}</h3>
                    
                    <p>Balance</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
                <a href="#" class="small-box-footer">Historic <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    
</div>
@stop