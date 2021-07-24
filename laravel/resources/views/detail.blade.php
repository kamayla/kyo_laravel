@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/updatePost" method="POST">
        @csrf
        <div>
            <lavel for="title">
                タイトル:
                <input id="title" type="text" name="title" value="{{ $post->title }}">
            </lavel>
        </div>
        <div>
            <lavel for="body">
                本文:
                <textarea id="body" name="body" cols="40" rows="4">{{ $post->body }}</textarea>
            </lavel>
        </div>
        <input type="hidden" name="id" value="{{ $post->id }}">
        <input type="submit" value="更新">
    </form>
    <a href="/admin">戻る</a>
</div>
@endsection
