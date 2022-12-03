@extends('layouts.app')
@section('content')
<div class="card-body">
        <table class="table table-striped task-table">
        <!-- テーブルヘッダ -->
        <thead>
          <th><h2>ToDoList</h2></th>
          <th> </th>
        </thead>
        <!-- テーブル本体 -->
        <tbody>
           <tr>
            <th>ToDoName</th>
            <th>ToDoDescription</th>
            <th>EstimateTime</th>
            <th colspan="2"></th>
        </tr>
          @foreach ($todos as $todo)
            <tr>
              <!-- 投稿タイトル -->
              <td class="table-text">
                <div>{{ $todo->task_name }}</div>
              </td>
              <!-- 投稿詳細 -->
              <td class="table-text">
                <div>{{ $todo->task_description }}</div> 
              </td>
              <!-- 投稿者名の表示 -->
              <td class="table-texit">
                <div>{{ $todo->estimate_hour }}</div>
              </td>
               <td><a href="/edit-page/{{$todo->id}}" class='btn btn-success'>Edit</a></td>
          </tr>
        @endforeach
     </tbody>
    </table>
   <a href="/create-page" class='btn btn-primary'>AddToDo</a>
  </div>
@endsection
