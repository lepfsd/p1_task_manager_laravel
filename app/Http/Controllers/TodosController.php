<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    
    public function index() 
    {
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoId)
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }

    public function create() 
    {
         return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:6',
            'description' => 'required|min:6'
        ]);

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('todos');
    }

    public function edit($id)
    {
        return view('todos.edit')->with('todo', Todo::find($id));
    }

    public function update($id)
    {
        $this->validate(request(), [
            'name' => 'required|min:6',
            'description' => 'required|min:6'
        ]);

        $data = request()->all();

        $todo = Todo::find($id);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/todos');
    }

    public function delete($id)
    {

        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/todos');

    }

}
