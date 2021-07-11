<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\TestInterface;
use App\Todo;

class TodoController extends Controller
{
    protected $todo;
    public function __construct(TestInterface  $todo){
        $this->todo = $todo;
    }
       
    public function index()
    {
        $data = $this->todo->all();
        return view('todo',compact('data'));
    }

   

    
    public function store(Request $request)
    {
        //dd($request->all());
        //$this->todo->store($request->all());


        Todo::create($request->all());

        // Todo::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'phone' => $request->phone,
        //     ]);

        return redirect()->back()->with('success','Added done');
    }

  
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
        $data = $this->todo->get($id);

        // $data = Todo::findorfail($id);
        
         return view('todo',compact('data'));

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
        $this->todo->update($id,$request->all());
         return redirect()->back()->with('success','updated done');
    }

    public function destroy($id)
    {


        // $data = Todo::find($id);
        // $data->delete();
         $this->todo->delete($id);
         return redirect()->back()->with('success','deleted done');
    }
}
