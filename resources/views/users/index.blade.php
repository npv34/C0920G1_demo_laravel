@extends('layouts.master')
@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-success">Add</a>

    <input type="text" name="keyword" id="search-user">

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th></th>
        </tr>
        </thead>
        <tbody id="users-list">
        @foreach($users as $key => $user)
            <tr class="user-item">
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @foreach($user->roles as $role)
                        {{ $role->name . ';' }}
                    @endforeach
                </td>
                <td><a onclick="return confirm('Are you sure delete this user?')"
                       href="{{ route('user.delete', $user->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('user.update', $user->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
