{{ $dbug }}
{{ $dbug2 }}
{{--{{ $dbugs }}--}}
@foreach($dbugs as $dbug)
    {{ $dbug->id }} <br>
@endforeach
