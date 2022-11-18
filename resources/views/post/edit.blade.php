@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text"  class="form-control" id="title" aria-describedby="Title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" type="text"  class="form-control" id="content" aria-describedby="Content" >{{ $post->content }} </textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input name="image" type="text"  class="form-control" id="image" aria-describedby="Image" value="{{ $post->id }}">
            </div>
            <label for="CategoryInput" class="form-label">Category</label>
            <select class="form-select" aria-label="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ $category->id === $post->category_id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>

                @endforeach
            </select>
            <label for="TagsInput" class="form-label">Tags</label>
            <select class="form-select" multiple aria-label="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                            {{ $tag->id === $postTag->id ? 'selected' : '' }}
                        @endforeach
                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
