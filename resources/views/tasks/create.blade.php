@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<div class="px-20">
    <h1 class="font-bold text-3xl mb-8">Create Task</h1>
    <form action="/tasks" method="POST">
        @csrf {{-- 숨겨진 인풋(보안강화 용도) --}}
        <label class="block" class="border" for="title">Title</label>
        <input class="border w-full mb-2 p-2 @error('title') border border-red-600 @enderror" type="text" name="title" id="title" value="{{ old('title') ? old('title') : ''}}"> 
        @error('title')
            <small class="text-red-600">{{ $message }}</small> <br><br>
        @enderror

        <label class="block" for="body">Body</label>
        <textarea class="border w-full mb-2 p-2  @error('body') border border-red-600 @enderror" name="body" id="body" cols="30" rows="10">{{ old('body') ? old('body') : ''}}</textarea>
        @error('body')
            <small class="text-red-600">{{ $message }}</small> <br>
        @enderror

        <button class="bg-blue-400 text-white hover:bg-blue-500 px-3 py-1 float-right">Submit</button>
    </form>
</div>
    
@endsection 