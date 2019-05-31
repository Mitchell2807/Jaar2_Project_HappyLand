@extends('layout.master')

@section('content')
    <h1 class="mt-5">Attractions</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/attractions') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/attractions/create') }}">Create</a>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container" style=" display: flex; flex-direction: column; justify-content: flex-start;">
        @foreach($attractions as $attraction)
            <div style="background-color:black; color:white; margin-bottom: 20px; width: 9rem; margin-left: 20px">
                <h2 style="width: 150px" scope="row">attractie {{$attraction->id }}</h2>
                <p>Wait time = {{ $attraction->waitTime }}</p>
                <p>Minimal age = {{ $attraction->minAge }}</p>
                <p>Min length = {{ $attraction->minLength }}</p>
                <a href="{{ url('/attractions/'.$attraction->id.'/edit') }}">Edit</a><br>
                <a href="{{ url('/attractions/'.$attraction->id.'/delete') }}">Delete</a>
            </div>
        @endforeach
    </div>

@endsection
