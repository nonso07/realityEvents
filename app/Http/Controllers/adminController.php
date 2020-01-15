<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**************** */
    function upload(){
        
        return view('event.upload');
    }
    //
    function index(){
        if(auth()->user()->admin === 'adminAdmin') { 
            return view('admin.index');
           }else{
            return view('home');
           }
        
        //return view('admin.index');
    }
    //

    function users(){

        if(auth()->user()->admin === 'adminAdmin') { 
            return view('admin.users');
           }else{
            return view('home');
           }

        //return view('admin.users');
    }
    //userTabel
    function userTabel(){

        if(auth()->user()->admin === 'adminAdmin') { 
            return view('admin.userTabel');
           }else{
            return view('home');
           }

        //return view('admin.users');
    }


}
