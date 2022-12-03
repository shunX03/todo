@extends('layouts.app')
@section('content')
  <div>
    <form method="POST" action="/edit">
    @csrf
    <input type="hidden" name="id" value="{{$todo->id}}">
    <div class="form-group">
      ToDo name
      <div class="col-sm-6">
        <input type="text" name="task_name" value="{{$todo->task_name}}" class="form-control">
     </div>
    </div> 
    <div class="form-group">
      ToDo content
      <div class="col-sm-6">
        <input type="text" name="task_description" value="{{$todo->task_description}}" class="form-control">
      </div>
    </div>
     <div class="form-group">
      Estimate time
      <div class="col-sm-6">
        <input type="time" name="estimate_hour" value="{{$todo->estimate_hour}}" class="form-control">
      </div>
    </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
         <input type="submit" name="edit" value="Edit" class='btn btn-primary'>
        </div>
      </div>
      </form>
    </div>
    
@endsection