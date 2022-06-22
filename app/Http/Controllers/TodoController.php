<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; 

class TodoController extends Controller
{ 
    public function index(){

        $todo = Todo::all(); 
        return view('index')->with('todos', $todo);

    }

    public function store() {
        try {
            $this->validate(request(), [
                'name' => ['required'], 
            ]);
        } catch (ValidationException $e) {
        }


        $data = request()->all();


        $todo = new Todo();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $data['name']; 
        $todo->save();

        session()->flash('success', 'Todo created succesfully');

        return redirect('/');
    }
    public function create(){
        return view('todos.create');
    }

    public function details(){

        return view('details');

    }

    public function edit(){

        return view('edit');

    }
    public function update(){

        //we will write codes for updating a todo here

    }
    public function delete(Todo $todo){

        $todo->delete();
        return redirect('/');

    }
}
