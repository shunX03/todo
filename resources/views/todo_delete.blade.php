<h1>ToDo List</h1>                                                                                                 
<div>
    <h2>この内容を削除しますか？</h2>
    <form method="POST" action="/delete/{{$todo->id}}">
        @csrf
        <p>
            タスクの名前：{{$todo->task_name}}
        </p>
        <p>
            タスクの説明：{{$todo->task_description}}
        </p>
        <p>
            作業時間(h) ：{{$todo->estimate_hour}}
        <p>
        <input type="submit" name="delete" value="削除">
    </form>
    <a href="/">戻る</a>
</div>