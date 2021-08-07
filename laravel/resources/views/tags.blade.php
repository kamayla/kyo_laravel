@extends('layouts.app')

@section('content')
<div class="container">
    <h1>タグ追加ページ</h1>
    <form action="/tags" method="POST" >
        @csrf
            <lavel for="tags">

                <input id="tags" type="text" name="name">
            </lavel>

        <input type="submit" value="送信">
    </form>
    @foreach($tags as $tag)
        <p>{{ $tag->name }}</p>
    @endforeach
</div>
@endsection




