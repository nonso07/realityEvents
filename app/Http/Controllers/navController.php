<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navController extends Controller
{
    function booking(){
        return view('event.booking');
    }

    function services(){

        return view('event.services');

    }

    function index(){
        return view('event.index');
    }
    //
}
