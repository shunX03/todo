<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoFormController extends Controller
{
    //
         public function index()
     {
         $todos = Todo::orderBy('id', 'asc')->get();
         return view('todo_list', [
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
         $todo->assign_person_name = $request->assign_person_name;
         $todo->estimate_hour = $request->estimate_hour;
         $todo->save();

         return redirect('/');
     }
}
