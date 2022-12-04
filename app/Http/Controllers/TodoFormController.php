<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Todo; 

class TodoFormController extends Controller
{
         public function index(Request $request)
     {
         $keyword = $request->input('keyword');

    $query = Todo::query();

    if(!empty($keyword))
    {
        $query->where('task_name','like',"%{$keyword}%");
        $query->orWhere('task_description','like',"%{$keyword}%");
    }
    
    
        $todos = $query->get();
          return view('todo', compact('todos', 'keyword'));
         
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
     
         public function editPage($id)
     {
         $todo = Todo::find($id);
         return view('todo_edit', [
            "todo" => $todo
         ]);
     }
     
         public function edit(Request $request)
     {
          Todo::find($request->id)->update([
           'task_name' => $request->task_name,
           'task_description' => $request->task_description,
           'estimate_hour' => $request->estimate_hour
           ]);
         return redirect('/');
     }
     
     public function delete($id)
{
    $todo = \App\Todo::find($id);
    $todo->delete();
    return redirect()->to('/');
}

}
