@extends('layouts.app')
@section('content')
<div class="card-body">
  <div class="card-title">
    投稿フォーム
  </div>
  <!-- バリデーションエラーの表示に使用-->
    <!-- 投稿フォーム -->
    @if( Auth::check() )
      <form action="{{ url('todos') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <!-- 投稿のタイトル -->
      <div class="form-group">
        投稿のタイトル
        <div class="col-sm-6">
          <input type="text" name="task_name" class="form-control">
        </div>
      </div>
      <!-- 投稿の本文 -->
      <div class="form-group">
      投稿の本文
        <div class="col-sm-6">
          <input type="text" name="task_description" class="form-control">
        </div>
      </div>
      <!--　登録ボタン -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>
    </form>
  @endif
</div>
  <!-- 全ての投稿リスト -->
  @if (count($todos) > 0)
    <div class="card-body">
      <div class="card-body">
        <table class="table table-striped task-table">
        <!-- テーブルヘッダ -->
        <thead>
          <th>投稿一覧</th>
          <th> </th>
        </thead>
        <!-- テーブル本体 -->
        <tbody>
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
              <td class="table-text">
                <div>{{ $todo->user->name }}</div>
              </td>
          </tr>
        @endforeach
     </tbody>
    </table>
  </div>
</div>
@endif
@endsection