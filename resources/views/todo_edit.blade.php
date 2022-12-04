@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Edit</div>
            <form method="POST" action="/edit">
            @csrf
            @if ($errors->any())
              <ul>
                @foreach ($errors->all() as $error)
                <li style="color:red">{{$error}}</li>
                @endforeach
              </ul>
            @endif
            <input type="hidden" name="id" value="{{$todo->id}}">
              <div class="form-group mt-3">
                <label for="name" class="col-md-4 col-form-label text-md-right">ToDo Name</label>
                  <div class="col-sm-6 ml-5">
                    <input type="text" name="task_name" value="{{$todo->task_name}}" class="form-control">
                  </div>
              </div> 
              <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">ToDo Content</label>
                  <div class="col-sm-6 ml-5">
                    <input type="text" name="task_description" value="{{$todo->task_description}}" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">Estimate Time</label>
                  <div class="col-sm-6 ml-5">
                    <input type="time" name="estimate_hour" value="{{$todo->estimate_hour}}" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6 ml-5">
                  <input type="submit" name="edit" value="Edit" class='btn btn-primary'>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection