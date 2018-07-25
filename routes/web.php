<?php

$this->group(['middleware',['auth'],'namespace' =>'Admin','prefix' => 'admin'], function(){
 
    $this->get('/','AdminController@index')->name('admin.home');
    $this->get('balance','BalanceController@index')->name('admin.balance');
    $this->get('deposit','BalanceController@deposit')->name('balance.deposit');
    $this->post('store','BalanceController@store')->name('balance.store');
 
});

$this->get('/','AdminController@index')->name('admin.home');
$this->get('/home',function(){
    return redirect('/login');
});


$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

