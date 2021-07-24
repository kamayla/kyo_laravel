@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <form action="/savePost" method="POST" enctype="multipart/form-data">
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
            <div>
                <lavel for="thumbnail_image">
                    サムネイル画像:
                    <input id="thumbnail_image" name="thumbnail_image" type="file" accept="image/*">
                </lavel>
            </div>
            <div>
                <lavel for="body_image">
                    トップ画像:
                    <input id="body_image" name="body_image" type="file" accept="image/*">
                </lavel>
            </div>
            <input type="submit" value="送信">
        </form>

    </div>
    <table class="table">
        <tr>
            <th>サムネイル</th>
            <th>タイトル</th>
            <th>本文</th>
            <th>アクション</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td><img style="height: 50px;" src="{{ asset("storage/img/$post->thumbnail_path") }}" alt=""></td>
                <td><a href="/detail/{{ $post->id }}">{{ $post->title }}</a></td>
                <td>{{ $post->body }}</td>
                <td><a href="/deletePost/{{ $post->id }}">削除</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection




