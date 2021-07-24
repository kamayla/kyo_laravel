
@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>タイトル</th>
                <th>投稿日</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td><a href="/anonymousDetail/{{ $post->id }}">{{ $post->title }}</a></td>
                    <td>{{ $post->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
