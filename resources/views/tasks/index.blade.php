@extends('layouts.app')

@section('content')

    
    @if (count($tasks) > 0)
        <h1>今日のタスク</h1>
        <table class="table table-bordered table-hover mt-4">
            <thead>
                <tr>
                    <th>タスクid</th>
                    <th>ステータス</th>
                    <th>タスク内容</th>
                    <th>最終更新</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</th>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="mb-2">
            <a class="add btn btn-primary" href="{!! route('tasks.create') !!}">
                <i class="fas fa-plus"></i> タスクを追加
            </a>
        </div>
        
        
    @else
        <div class="text-center">
            <hgroup>
                <h1>タスクはありません</h1>
                <h2 class="mt-4 mb-4 text-muted">今日のタスクを計画しましょう</h2>
            </hgroup>
            
            <a class="add btn btn-primary" href="{!! route('tasks.create') !!}">
                <i class="fas fa-plus"></i> タスクを追加
            </a>
        </div>
    
    @endif
    
    
    
@endsection