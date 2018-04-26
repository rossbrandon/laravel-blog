@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            <strong>Create a new category</strong>
        </div>

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Save Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br />

    <div class="card">
        <div class="card-header">
            <strong>All Categories</strong>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Category Name</th>
                <th>Editing</th>
                <th>Deleting</th>
                </thead>
                <tbody>
                    @if($categories->count() > 0)
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="5" class="text-center">There are no categories yet</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
