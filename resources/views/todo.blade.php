@extends('layouts.app')
@section('content')
  <form class="form-inline my-2 my-lg-0 ml-4">
    <div class="form-group">
      <input type="search" class="form-control mr-sm-2" name="keyword"  value="{{request('keyword')}}" placeholder="Type Words" aria-label="search...">
    </div>
      <input type="submit" value="検索" class="btn btn-info">
  </form>
  <div class="card-body">
    <table class="table table-striped task-table">
      <thead>
        <th><h2>ToDoList</h2></th>
      </thead>
      <tbody>
        <tr>
          <th>ToDoName</th>
          <th>ToDoContent</th>
          <th>EstimateTime</th>
          <th colspan="2"></th>
        </tr>
          @foreach ($todos as $todo)
            <tr>
              <td class="table-text">
                <div>{{ $todo->task_name }}</div>
              </td>
              <td class="table-text">
                <div>{{ $todo->task_description }}</div> 
              </td>
              <td class="table-texit">
                <div>{{ $todo->estimate_hour }}</div>
              </td>
              <td><a href="/edit-page/{{$todo->id}}" class='btn btn-success'>Edit</a></td>
                <td><form action="/delete/{{$todo->id}}" method="POST">
                  {{ csrf_field() }}
                  <input type="submit" class="btn btn-danger btn-dell" value="Delete">
                </form></td>
            </tr>
          @endforeach
      </tbody>
    </table>
      <a href="/create-page" class='btn btn-primary'>AddToDo</a>
  </div>
@endsection
