<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rocket;
use App\User_Comment;

class TestShow extends Controller
{
     public function index($id)
    {
        $task = Rocket::find($id);
        $com = User_Comment::where('id_st',$id)->get();
        //return var_dump($com);
        return view('WellcomeShow',['task'=>$task,'coms'=>$com]);
    }

    public function update (Request $request)
    {
        $task = new User_Comment;
        $task->u_coment=$request->coment;
        $task->u_name=$request->u_name;
        $task->id_st=$request->id;

        $task->save();

        //Session::flash('success','Created Task Sucessully');

        return redirect()->route('show',['id'=>$request->id]);
        //var_dump($id);
    }
}
