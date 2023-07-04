@extends('welcome')

@section('contents')
    <div class="container">
        <img src="{{ $travel->image }}" alt="">
        <h1>{{ $travel->title }}</h1>
        <h2>{{ $travel->country }}</h2>
        <p>{{ $travel->text }}</p>
        <h3>{{ $travel->date }}</h3>
        <a class="btn
        btn-warning" href="{{ route('travels.edit', ['travel' => $travel->id]) }}">EDIT
        </a>
    </div>
@endsection
