@extends('layouts.app')

@section('title', 'Task detail')

@section('content')
<div class="px-20">
    <h1 class="font-bold text-3xl mb-8">Task</h1>
     {{-- {{ $task }} <br><br> --}}
     <div class="border p-4 mb-3 bg-white">
        Title: {{ $task->title }}
        <small class="float-right">
            Created at {{ $task->created_at }} <br><hr>
            Updated at {{ $task->updated_at }}
        </small>
     </div>
     <div class="border p-4 mb-3 bg-white">
     Body <hr><br>
     <p>{{ $task->body }}</p>
    </div>
    @if ($task->user_id == Auth::user()->id)
        <div class="flex-initial">
            <a href="/tasks/{{ $task->id }}/edit">
                <button class="bg-blue-400 text-white hover:bg-blue-500 px-4 py-1 float-right m-1">Edit</button>
            </a>
            <form method="POST" action="/tasks/{{ $task->id }}">
                @method('DELETE')
                @csrf
                <button class="bg-yellow-400 text-white hover:bg-yellow-500 px-4 py-1 float-right m-1">Delete</button>
            </form>  
        </div>  
    @endif
</div>
    
@endsection 