<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use Illuminate\Support\Collection;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $out_task= task::all();
        return view('admin.task')->with('out_task', $out_task);
        //
    }
    //Task Table 
    public function taskTable()
    {
        $query_task= task::orderBy('task_id','desc');
        //all()->paginate(10);
        $out_task= $query_task;//->//where('catigory', '=', 'cake')
                               // ->paginate(12);

        return view('admin.taskTable')->with('out_task', $out_task);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.task');
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
        //if(isset($_POST['subm']))
        if ($request->input('submit')=='submit'){

        $this->validate($request, [ 
            'eventTask' =>'required',
           // 'status' =>'required'
           'price' =>'required',
           'catigory' =>'required',
           'mode' =>'required'
        ]);

        $post= new task;
        $post->eventTask = $request-> input('eventTask');
        $post->status = $request-> input('status');
        $post->price = $request-> input('price');
        $post->catigory = $request-> input('catigory');
        $post->mode = $request-> input('mode');
        $post->save();
        //
        return redirect('/task');

        }elseif($request->input('see')=='viewAll'){
        //elseif(isset($_POST['view'])){
           $eventVar = $request-> input('eventCatigory');
           $mode = $request-> input('mod');
           
            $query_task= task::all();
            //orderBy('task_id','desc');
            //all()->paginate(10);

            $eventCatigory1= collect($query_task)->where('mode', $mode );

            $eventCatigory= collect($eventCatigory1)->where('catigory', $eventVar );
            //$query_task->where('catigory', '=', $request->input('eventCatigory') )
                                   // ->paginate(12);
             
            // using collection and where as an array method

    
            return view('event.taskView')->with('eventCatigory', $eventCatigory);    
            
           // return redirect('/home'); adding a collection array method

        }else{

            return redirect('/home');
        }
    }
    // new request viwe
    /* public function taskByType(Request $request)
    {
        $eventVariable = $request-> input('eventCatigory');
        $query_task= task::orderBy('task_id','desc');
        //all()->paginate(10);
        $eventCatigory= $query_task->where('catigory', '=', $eventVariable )
                                ->paginate(12);


        return view('event.taskView')->with('eventCatigory', $eventCatigory);
        //
    }
    */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
