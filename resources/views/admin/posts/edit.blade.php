@extends('layouts.app')

@section('content')

    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <br />
    @endif

    <div class="card">
        <div class="card-heading">
            <strong>Edit post: {{ $post->title }}</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" />
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            @if($post->category->id == $category->id)
                                selected
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                    @foreach($post->tags as $t)
                                        @if($tag->id == $t->id)
                                            checked
                                        @endif
                                    @endforeach
                                >{{ $tag->tag }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="post_content">Content</label>
                    <textarea name="post_content" id="post_content" cols="5" rows="10" class="form-control">{{ $post->post_content }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Submit Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
