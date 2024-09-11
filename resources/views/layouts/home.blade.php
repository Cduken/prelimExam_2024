@extends('layouts.app')

@section('content')
    <h1>Home Page</h1>
    <nav>
        <ul>
            <li><a href="{{ route('items') }}">Item Page</a></li>
            <li><a href="{{ route('pictures') }}">Picture Page</a></li>
        </ul>
    </nav>
@endsection
