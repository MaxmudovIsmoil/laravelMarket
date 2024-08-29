@extends('layouts.app')

@push('style')
    <style>
        body {
            background: lightgreen;
        }
    </style>
@endpush
@section('content')

    <h1>Groups page</h1>
{{--    @foreach($users as $user)--}}
{{--        <p> {{ $user }}</p>--}}
{{--    @endforeach--}}

@endsection
