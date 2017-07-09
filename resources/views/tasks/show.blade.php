@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のTASK詳細ページ</h1>
    
    
    <p>Task: {{ $task->content }}</p>
　　<p>Status: {{ $task->status }}</p>

    {!! link_to_route('tasks.edit', 'このTASK編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection