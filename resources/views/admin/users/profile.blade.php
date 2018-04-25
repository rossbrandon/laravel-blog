@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            <strong>Edit Profile</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('user.profile') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" />
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
                    <input type="text" name="facebook" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="youtube">YouTube Profile</label>
                    <input type="text" name="youtube" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="about">YouTube Profile</label>
                    <textarea id="text" name="about" class="form-control" cols="6" rows="6"></textarea>
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
