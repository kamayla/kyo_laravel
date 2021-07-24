
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <h6>{{ $post->body }}</h6>
    </div>
@endsection
