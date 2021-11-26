@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<div class="px-20">
    <h1 class="font-bold text-3xl mb-8">Edit Task</h1>
    <form action="/tasks/{{ $task->id }}" method="POST">
        @method('PUT') {{-- html 폼은 put,patch,delete를 보낼수 없기때문에 hidden을 써야함 --}}
        @csrf {{-- 숨겨진 인풋(보안강화 용도) --}}
        <label class="block" class="border m-3 p-3" for="title">Title</label>
        <input class="border w-full p-2" type="text" name="title" id="title" value="{{ $task->title }}"> <br><br>

        <label class="block" for="body">Body</label>
        <textarea class="border w-full mb-2 p-2" name="body" id="body" cols="30" rows="10">{{ $task->body }}</textarea> <br> 

        <button class="bg-blue-400 text-white hover:bg-blue-500 px-3 py-1 float-right">Submit</button>
    </form>
</div>
    
@endsection 