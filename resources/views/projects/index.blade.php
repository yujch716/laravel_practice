@extends('menu')

@section('content')
    <h1>Project List</h1>
    @foreach ($projects as $project)
        Title: {{ $project -> title }} <br>
        Sub: {{ $project -> sub }} <br>
        Name: {{ $project -> name }} <br>
        created: {{ $project -> created_at }} <br><br>
    @endforeach
@endsection