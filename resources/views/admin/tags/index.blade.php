@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            <strong>Create a new tag</strong>
        </div>

        <div class="card-body">
            <form action="{{ route('tag.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" class="form-control" />
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Save Tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr />

    <div class="card">
        <div class="card-header">
            <strong>All Tags</strong>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Tag Name</th>
                <th>Editing</th>
                <th>Deleting</th>
                </thead>
                <tbody>
                @if($tags->count() > 0)
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->tag }}</td>
                            <td>
                                <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">There are no tags yet</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
