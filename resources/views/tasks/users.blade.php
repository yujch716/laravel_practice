@extends('layouts.app')

@section('title', 'My Page')

@section('content')
<div class="px-20">
    <h1 class="font-bold text-3xl mb-8">Users</h1>
     {{-- {{ $task }} <br><br> --}}
        @foreach ($users as $user)
            <div class="border mb-3 p-4 bg-white">
                Email: {{ $user->email }} <br>
                Name: {{ $user->name }} <br>
                Created at: {{ $user->created_at}}
                
            </div>
        @endforeach 
</div>
    
@endsection 