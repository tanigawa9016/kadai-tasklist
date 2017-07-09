@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のTASK詳細ページ</h1>
    
     <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
    
      <tr>
        <th>Task</th>
        <td>{{ $task->content }}</td>
　　  </tr>
　　
　　  <tr>
　　    <th>Status</th>
　　    <td>{{ $task->status }}</td>
      </tr>
     </table>

    {!! link_to_route('tasks.edit', 'このTASK編集', ['id' => $task->id],['class' => 'btn btn-default']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection