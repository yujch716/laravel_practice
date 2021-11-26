@extends('menu')    {{--views/menu.blade.php 사용하겠다--}}

@section('title')   {{--yield('title')에 넣자--}}
    bb
@endsection

@section('content') {{--yield('content')에 넣자--}}
    bbbb welcome
    <br><br>
    <?php var_dump($alert); ?>
    <ul>
        @foreach($alert as $al)
        <li> {{ $al }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach($alert as $al)
        <li><?php echo $al; ?></li>
        @endforeach
    </ul>
@endsection
