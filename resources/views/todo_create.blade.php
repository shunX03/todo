@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
              <div class="card-header">Post</div>
                <form method="POST" action="/create">
                @csrf
                @if ($errors->any())
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li style="color:red">{{$error}}</li>
                    @endforeach
                  </ul>
                @endif
                <div class="form-group mt-3">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Todo Name</label>
                    <div class="col-sm-6 ml-5">
                      <input type="text" name="task_name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Todo content</label>
                        <div class="col-sm-6 ml-5">
                          <input type="text" name="task_description" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Estimate Time</label>
                        <div class="col-sm-6 ml-5">
                          <input type="time" name="estimate_hour" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-6 ml-5">
                        <button type="submit" class="btn btn-primary">
                        Save
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>  
@endsection