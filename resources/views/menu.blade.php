<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel')</title> {{--@section('title')에 주어진게 없다면 title은'laravel'로 한다--}}
    <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}">
</head>
<body>
    <div class="bg-red-300 p-2">
        <a href="/tasks">
            <b>hello</b>
        </a>
    </div>
    <div class="container mx-auto">
    <ui>
        <li> <a href="/aa">aa</a> </li>
        <li> <a href="/bb">bb</a> </li>
        <li> <a href="/cc">cc</a> </li>
    </ui>
    <br>
        @yield('content')  {{--@section('content')--}}
    </div>
</body>
</html>
