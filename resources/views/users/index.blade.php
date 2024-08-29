@extends('layouts.app')

@push('style')
    <link href="{{ asset('asstes/main.css') }}" rel="stylesheet" />
@endpush

@section('content')

    <h1>Users page</h1>
    @foreach($users as $user)
        <p> {{ $user }}</p>
    @endforeach

@endsection
