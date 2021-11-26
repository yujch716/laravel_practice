@extends('layouts.app')

@section('title')
    Tasks
@endsection

@section('content')
<div class="px-20">
    <h1 class="font-bold text-3xl">Tasks List</h1> <br>
    <ul>
        @foreach ($tasks as $task)
            <div class="border mb-3 p-4 hover:bg-white">
                <a href="/tasks/{{ $task->id }}">
                    <li class="font-bold">Title: {{ $task->title }}
                    <small class="float-right"> Created at: {{ $task->created_at}} </small></li>
                </a>
            </div>
        @endforeach
    </ul>
    <a href="tasks/create" class="bg-blue-400 text-white hover:bg-blue-500 px-3 py-1 float-right">Write</a>
@endsection 
</div>