@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tagsのページだよ</h1>
    <form action="/tags" method="POST">
        @csrf
        <label for="tag-name">
            <input id="tag-name" type="text" name="name">
        </label>

        <input type="submit" value="送信">
    </form>
    @foreach ($tags as $tag)
        <p>{{ $tag->name }}</p>
    @endforeach
</div>
@endsection




