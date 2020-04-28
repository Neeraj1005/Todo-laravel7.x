<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use App\Step;
use Auth;
use Illuminate\Http\Request;

class TodoController extends Controller
{
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
        // $todos = Todo::orderBy('completed')->get();
        // $todos  =   auth()->user()->todos()->orderBy('completed')->get();//THis is relation
        $todos  =   auth()->user()->todos->sortBy('completed'); //THis is collection where i used sortBY
        return view('todos.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoCreateRequest $request)
    {
        /*
        $userId = auth()->id();
        $request['user_id'] = $userId;
        $todo->create($request->all());
        */
        // dd($request->all());


        $todo = auth()->user()->todos()->create($request->all());
        //This if condition check if input name=>step is filled or not
        if($request->step){
            foreach ($request->step as $step) {
                $todo->steps()->create(['name'=>$step]);
            }
        }

        return redirect(route('todos.index'))->with('message','Todo Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todos.show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect(route('todos.index'))->with('message','Todo updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('message','Task is completely deleted');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed'=>1]);
        return redirect()->back()->with('message','Task marked as completed');
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(['completed'=>false]);
        return redirect()->back()->with('message','Task marked as incompleted!');
    }
}
