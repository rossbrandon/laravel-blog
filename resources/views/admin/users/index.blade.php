@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            <strong>Create User</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Add User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br />

    <div class="card">
        <div class="card-header">
            <strong>All Users</strong>
        </div>
        <div class=card-body">
            <table class="table table-hover">
                <thead>
                <th>Avatar</th>
                <th>Name</th>
                <th>Permission</th>
                <th>Delete</th>
                </thead>
                <tbody>
                    @if($users->count() > 0)
                        @foreach($users as $user)
                            <tr>
                                <td><img src="{{ asset($user->profile->avatar) }}" alt="Avatar Thumbnail" width="50px" height="50px" style="border-radius: 50%;" /></td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if($user->admin)
                                        <a href="{{ route('user.revert', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove Admin Permissions</a>
                                    @else
                                        <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-success">Make Admin</a>
                                    @endif
                                </td>
                                <!--
                                <td><a href="{{ route('user.profile.update', ['id' => $user->id])  }}" class="btn btn-info">Edit Profile</a></td>
                                -->
                                <td>
                                    @if(Auth::id() != $user->id)
                                        <a href="{{ route('user.delete', ['id' => $user->id])  }}" class="btn btn-danger">Delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="5" class="text-center">No users yet</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop
