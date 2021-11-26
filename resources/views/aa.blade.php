@extends('menu') {{--views/menu.blade.php 사용하겠다--}}

@section('title') {{--yield('title')에 넣자--}}
    aa
@endsection

@section('content') {{--yield('content')에 넣자--}}
    aaaa welcome
    <br><br>
    <?php var_dump($Languages); ?> <br><br>
    <ul>
        @foreach($Languages as $Lang)
        <li> {{ $Lang }}</li>
        @endforeach
    </ul>
@endsection
