<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\photo;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $out_photo= photo::all();
        return view('event.gallary.decoration')->with('out_photo', $out_photo);
        //
    }

    //
    public function cakePhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'cake')
                                ->paginate(12);

        return view('event.gallary.cake')->with('out_photo', $out_photo);
        //
    }
    //
    //********* */
    public function lifeBandPhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'lifeBand')
                                ->paginate(12);

        return view('event.gallary.lifeBand')->with('out_photo', $out_photo);
        //
    }
    /******* */
    //
    /********* */
    public function undertakerPhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'undertaker')
                                ->paginate(12);

        return view('event.gallary.undertaker')->with('out_photo', $out_photo);
        //
    }
    /********* */
    //
    /*********** */
    public function makeOverPhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'makeOver')
                                ->paginate(12);

        return view('event.gallary.makeOver')->with('out_photo', $out_photo);
        //
    }

    /******** */
    public function cateringPhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'catering')
                                ->paginate(12);

        return view('event.gallary.catering')->with('out_photo', $out_photo);
        //
    }

    /******** */
    // amblance
    // amblance
    public function amblancePhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'amblance')
                                ->paginate(12);

    // amblance
        return view('event.gallary.amblance')->with('out_photo', $out_photo);
        //
    }
    /******** */
    public function decorationPhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'decoration')
                                ->paginate(12);

    // amblance
        return view('event.gallary.decoration')->with('out_photo', $out_photo);
        //
    }
    /**** */
     /******** */
     public function casketPhoto()
     {
         $query_photo= photo::orderBy('id','desc');
         //all()->paginate(10);
         $out_photo= $query_photo->where('catigory', '=', 'casket')
                                 ->paginate(12);
 
     // amblance
         return view('event.gallary.casket')->with('out_photo', $out_photo);
         //
     }

    /*** */
    // usherSecurity
    /*** */
    public function usherSecurityPhoto()
    {
        $query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
        $out_photo= $query_photo->where('catigory', '=', 'usherSecurity')
                                ->paginate(12);
    // amblance
        return view('event.gallary.usherSecurity')->with('out_photo', $out_photo);
        //
    }
    /***** */
    public function postTabel()
    {
        //$query_photo= photo::orderBy('id','desc');
        //all()->paginate(10);
       // $out_photo= $query_photo->paginate(12);
                                
       // return view('event.gallary.postTabel')->with('out_photo', $out_photo);
        //
        $out_photo= photo::orderBy('id','desc')->paginate(15);
        //orderBy('id','desc');
        //all()->paginate(10);
        return view('event.gallary.postTabel')->with('out_photo', $out_photo);
    }
    //





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.upload');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        $this-> validate($request, [
            'title' => 'required',
            'body' => 'required',
            'catigory'=> 'required',
            'image' => 'image|nullable|max:1999'
        ]);
        if($request->hasFile('image')){
            // get fileName with the extension
            $fileNameWithExt= $request-> file('image')->getClientOriginalName();
            //
            $fileName= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //pathinfo(Input::file('image1')->getClientOriginalName(), PATHINFO_FILENAME);

            // $request-> pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // 
            $extension= $request-> file('image')->getClientOriginalExtension();
            //file name to add 
            $add_image= $fileNameWithExt.'_'.time().'.'.$extension;
            $path= $request->file('image')->storeAs('public/services_photo',$add_image);
        }else{
            return view('event.index');
        }

        $post= new photo;
        $post ->title = $request-> input('title');
        $post->body = $request-> input('body');
        $post->catigory = $request-> input('catigory');
        $post->model = $request-> input('model');
        $post->image = $add_image;

        $post->save();
        //
        return redirect('/postTabel');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $out_photo= photo::find($id);
        return view('event.show')->with('out_photo',$out_photo);
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $out_photo= photo::find($id);
        return view('event.edit')->with('out_photo',$out_photo);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this-> validate($request, [
            'title' => 'required',
            'body' => 'required',
            'catigory'=> 'required',
           // 'image' => 'image|nullable|max:1999'
        ]);
        /*
        if($request->hasFile('image')){
            // get fileName with the extension
            $fileNameWithExt= $request-> file('image')->getClientOriginalName();
            //
            $fileName= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //pathinfo(Input::file('image1')->getClientOriginalName(), PATHINFO_FILENAME);

            // $request-> pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // 
            $extension= $request-> file('image')->getClientOriginalExtension();
            //file name to add 
            $add_image= $fileNameWithExt.'_'.time().'.'.$extension;
            $path= $request->file('image')->storeAs('public/services_photo',$add_image);
        
        }else{
            
            $post->old = $request-> input('old');
            $add_image=$old;
           // return view('event.index');
        }  */
        //if ($request->input('update')=='submit'){
 
        //update after valification
        $post=  photo::find($id);
        $post ->title = $request-> input('title');
        $post->body = $request-> input('body');
        $post->catigory = $request-> input('catigory');
        $post->model = $request-> input('model');
        //$post->image = $add_image;
        $post->image = $request-> input('old');

        $post->save();
        //
        return redirect('/postTabel');
/*
    }elseif($request->input('photoUpload')=='photoEdit'){

        if($request->hasFile('image')){
            // get fileName with the extension
            $fileNameWithExt= $request-> file('image')->getClientOriginalName();
            //
            $fileName= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //pathinfo(Input::file('image1')->getClientOriginalName(), PATHINFO_FILENAME);

            // $request-> pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // 
            $extension= $request-> file('image')->getClientOriginalExtension();
            //file name to add 
            $add_image= $fileNameWithExt.'_'.time().'.'.$extension;
            $path= $request->file('image')->storeAs('public/services_photo',$add_image);

            //update after valification
        $post=  photo::find($id);
        $post ->title = $request-> input('title');
        $post->body = $request-> input('body');
        $post->catigory = $request-> input('catigory');
        $post->model = $request-> input('model');
        $post->image = $add_image;
        //$post->image = $request-> input('old');

        $post->save();
        //
        return redirect('/postTabel');

        }


    
    //}  */

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
