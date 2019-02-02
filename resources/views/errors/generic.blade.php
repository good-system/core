@extends('good-system::layouts.default')

@section('content')
    <h1>SYSTEM ERROR</h1>
    <p><i>@yield('extra')</i></p>
    @if(isset($message))
        @if (is_array($message)) {
            @foreach ($message as $m)
                <p>{{ $m }}</p>
            @endforeach
        @elseif (is_string($message))
            <p>{{ $message }}</p>
        @endif
    @else
        Unknown error(s).
    @endif
@endsection