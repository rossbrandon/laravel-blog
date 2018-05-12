@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-6">
                <div class="card text-white bg-success">
                    <div class="card-header text-center">Published Posts</div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $published_count }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-white bg-danger">
                    <div class="card-header text-center">Trashed Posts</div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $trashed_count }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-white bg-info">
                    <div class="card-header text-center">Users</div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $user_count }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-white bg-dark">
                    <div class="card-header text-center">Categories</div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $category_count }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-light">
                    <div class="card-header text-center">Tags</div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $tag_count }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
