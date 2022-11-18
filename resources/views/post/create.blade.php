@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="Title"
                       value="{{ old('title') }}"
                >


                @error("title")
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" type="text" class="form-control" id="content" aria-describedby="Content"
                >{{ old('content') }}</textarea>
                @error("content")
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input name="image" type="text" class="form-control" id="image" aria-describedby="Image">

            </div>
            <label for="CategoryInput" class="form-label">Category</label>
            <select class="form-select" aria-label="category" name="category_id">
                @foreach($categories as $category)

                    <option
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <label for="TagsInput" class="form-label">Tags</label>
            <select class="form-select" multiple aria-label="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option

                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
