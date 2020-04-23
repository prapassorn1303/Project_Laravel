<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks =Task::all();
        return view('tasks.index',compact('tasks',$tasks));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3',
            'description'=> 'required',
            'price'=> 'required',
            'amount'=> 'required',
            'img'=> 'required'
        ]);

        $path = $request->img->store('public/upload_images');
        $replace_path = str_replace("public","storage",$path);
            

        $task = Task::create([
            'title'=>$request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'amount'=> $request->amount,
            'img'=> $replace_path
            
        ]);

        
 
            
           
         
         
        
        return redirect('/tasks/'.$task->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show',compact('task',$task));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task',$task));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title'=>'required|min:3',
            'description'=> 'required',
            'price'=> 'required',
            'amount'=> 'required',
            'img'=> 'required'
            
        ]);
        $path = $request->img->store('public/upload_images');
        $replace_path = str_replace("public","storage",$path);

        
        $task->title =$request->title;
        $task->description = $request->description;
        $task->price = $request->price;
        $task->amount = $request->amount;
        $task->img = $replace_path;
        $task->save();
        $request->session()->flash('message','Successfully save !!!!');
        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,Task $task)
    {
        $task->delete();
        $request->session()->flash('message','Successfully delete !!!!');
        return redirect('tasks');
    }

    
}
