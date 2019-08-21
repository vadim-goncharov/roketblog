<?php

namespace App\Http\Controllers;

use App\Rocket;
use App\User_Comment;
use Illuminate\Http\Request;

class WellcomePage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Rocket::orderBy('pub_date','asc')->paginate(5);
        $com = User_Comment::get();

        return view('welcome',['tasks'=>$task,'coms'=>$com]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //$task = Rocket::find(1);

        //return redirect()->route('/');
        var_dump($request);
        var_dump($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Rocket::find($id);

        return view('WellcomeShow')->with('task',$task);
    }

    /**
     * Show the form for editing the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        var_dump($request);
        var_dump($id);
        
        //return redirect()->route('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rocket $rocket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rocket  $rocket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rocket $rocket)
    {
        //
    }
}
