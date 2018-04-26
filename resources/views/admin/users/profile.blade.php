@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            <strong>{{ $user->name }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset($user->profile->avatar) }}" alt="Avatar Image" width="200px" height="200px" />
                </div>
                <div class="col-lg-8">
                    <strong>About Me</strong>
                    <p>{{ $user->profile->about }}</p>
                </div>
            </div>
            @if($user->profile->facebook || $user->profile->youtube)
                <hr />
                @if($user->profile->facebook)
                    <a href="{{ $user->profile->facebook }}" target="_blank" class="btn-sm btn-secondary">Facebook</a>
                @endif
                @if($user->profile->youtube)
                    <a href="{{ $user->profile->youtube }}" target="_blank" class="btn-sm btn-secondary">YouTube</a>
                @endif
            @endif
        </div>
    </div>

    <br />

    <div class="card">
        <div class="card-header">
            <strong>Edit Profile</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" />
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="avatar">Edit Avatar</label>
                    <input type="file" name="avatar" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook Profile</label>
                    <input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}" />
                </div>
                <div class="form-group">
                    <label for="youtube">YouTube Profile</label>
                    <input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}" />
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea id="text" name="about" class="form-control" cols="6" rows="6">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
