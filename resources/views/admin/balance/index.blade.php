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
        <h3>Balance</h3>
    </div>
    <div class="box-body">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    
</div>
@stop