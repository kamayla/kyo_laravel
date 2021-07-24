
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <img style="height: 300px;" src="{{ asset($post->body_image_path) }}" alt="">
        <h6>{{ $post->body }}</h6>
    </div>
@endsection
