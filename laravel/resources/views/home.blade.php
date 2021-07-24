@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <form action="/savePost" method="POST">
            @csrf
            <div>
                <lavel for="title">
                    タイトル:
                    <input id="title" type="text" name="title">
                </lavel>
            </div>
            <div>
                <lavel for="body">
                    本文:
                    <textarea id="body" name="body" cols="40" rows="4"></textarea>
                </lavel>
            </div>
            <input type="submit" value="送信">
        </form>

    </div>
    <table class="table">
        <tr>
            <th>タイトル</th>
            <th>本文</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td><a href="/detail/{{ $post->id }}">{{ $post->title }}</a></td>
                <td>{{ $post->body }}</td>
                <td><a href="/deletePost/{{ $post->id }}">削除</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection




