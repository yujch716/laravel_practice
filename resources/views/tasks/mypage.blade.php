@extends('layouts.app')

@section('title', 'My Page')

@section('content')
<div class="px-20">
    <h1 class="font-bold text-3xl mb-8">My Page</h1>
        <div class="border mb-3 p-4 bg-white">
            Email: {{ Auth::user()->email }} <br>
            Name: {{ Auth::user()->name }} <br>
            Created at: {{ Auth::user()->created_at }}            
        </div>
</div>
    
@endsection 