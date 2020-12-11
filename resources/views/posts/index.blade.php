@extends('layouts.master')
@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-success">Add</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Desc</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $key => $post)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name ?? 'Khong xac dinh'  }}</td>

                <td>{{ $post->desc }}</td>
                <td><a onclick="return confirm('Are you sure delete this user?')" href="}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
