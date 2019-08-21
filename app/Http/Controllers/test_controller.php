<?php

namespace App\Http\Controllers;

use App\Rocket;
use App\User_Comment;
use Illuminate\Http\Request;

class test_controller extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_a=\Auth::user()->id;
        $task = Rocket::where('id_autor',$id_a)->orderBy('pub_date','asc')->paginate(5);
        $com = User_Comment::get();

        return view('test.index',['tasks'=>$task,'coms'=>$com]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Rocket;
        $task->head=$request->head;
        $task->discription=$request->discription;
        $task->id_autor=\Auth::user()->id;
        $task->pub_date=$request->pub_date;

        $task->save();

        //Session::flash('success','Created Task Sucessully');

        return redirect()->route('test');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function show(Rocket $rocket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//Rocket $rocket)
    {
        $task = Rocket::find($id);

        return view('test.edit')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id) //Rocket $rocket)
    {
        $task =Rocket::find($id);
        $task->head=$request->head;
        $task->discription=$request->discription;
        $task->pub_date=$request->pub_date;

        $task->save();

        //Session::flash('success','Created Task Sucessully');

        return redirect()->route('test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $task =Rocket::find($id);
        $task->delete();

        $coms = User_Comment::where('id_st',$id)->get();
        foreach ($coms as $com) {
            $com->delete();
        }
       
        return redirect()->route('test');
    }
}
