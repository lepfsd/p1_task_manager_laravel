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

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
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

        session()->flash('success', 'todo created successfully');

        return redirect('todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
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

        session()->flash('success', 'todo updated successfully');

        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {

        $todo->delete();

        session()->flash('success', 'todo deleted successfully');

        return redirect('/todos');

    }

    public function complete($id) 
    {
        $todo = Todo::find($id);
        $todo->completed = true;
        $todo->save();

        session()->flash('success', 'todo completed successfully');

        return redirect('/todos');
    }

}
