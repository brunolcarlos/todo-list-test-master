@extends('adminlte::page')

@section('title', 'Balance')

@section('content_header')

@stop

@section('content')
<div class="box mybox">
    <div class="box-header">
        <h3>Make a deposit</h3>
    </div>
    <div class="box-body">
        <div class="col-lg-6 col-xs-12">
            <form action="{{ route('balance.store')}}" method="POST">
                {!! csrf_field()!!}
                <div class="form-group">
                    <label for="deposit_value">Deposit Value</label><br>
                    <input type="text" placeholder="Deposit value" class="form-control"><br><br>
                    <button class="btn btn-success">Deposit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

</div>
@stop