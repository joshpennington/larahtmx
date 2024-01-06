@extends('layout.layout')

@section('content')

    <h1 class="text-3xl">Users</h1>

    <div
        hx-get="{{ route('htmx-users') }}"
        hx-swap="innerHTML"
        hx-trigger="load">
    </div>
@endsection
