<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;

class SiteController extends Controller
{
    function index(){
        return view('site.home.index');
    }
}
