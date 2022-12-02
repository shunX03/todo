<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Todo; 

class TodoFormController extends Controller
{
    //
         public function index()
     {
         $todos = Todo::orderBy('id', 'asc')->get();
         return view('todo', [
             "todos" => $todos
         ]);
     }
     
         public function createPage()
     {
         return view('todo_create');
     }  
     
         public function create(Request $request)
     {
         $todo = new Todo();
         $todo->task_name = $request->task_name;
         $todo->task_description = $request->task_description;
         $todo->estimate_hour = $request->estimate_hour;
         $todo->save();

         return redirect('/');
     }
}
