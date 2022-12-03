@extends('layouts.app')
@section('content')
  <div>
    <form method="POST" action="/create">
    @csrf
    <div class="form-group">
      ToDo name
      <div class="col-sm-6">
        <input type="text" name="task_name" class="form-control">
     </div>
    </div> 
    <div class="form-group">
      ToDo content
      <div class="col-sm-6">
        <input type="text" name="task_description" class="form-control">
      </div>
    </div>
     <div class="form-group">
      Estimate time
      <div class="col-sm-6">
        <input type="time" name="estimate_hour" class="form-control">
      </div>
    </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>
      </form>
    </div>
    
@endsection