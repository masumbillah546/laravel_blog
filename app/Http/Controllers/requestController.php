<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestController extends Controller
{
    public function index( request $request){
    	print_r($request->all());
    	print_r($request->path());
    }
}
