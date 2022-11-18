@extends('layouts.admin')

@section('content')
    <div>
        <div>
            <a href="{{ route('post.create') }}">Create new post</a>
        </div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}"> {{$post->id}} . {{ $post->title }} </a></div>
        @endforeach
        <div>
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
