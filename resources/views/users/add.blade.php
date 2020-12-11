@extends('layouts.master')
@section('content')
    <div class="col-12 col-md-12">
        <h3>Add new user</h3>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" value="{{ old('name') }}" name="name"
                       class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" value="{{ old('email') }}" name="email"
                       class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                @foreach($roles as $role)
                    <div class="checkbox">
                        <label><input name="roles[{{$role->id}}]" type="checkbox" value="{{ $role->id }}">{{ $role->name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-info" href="{{ route('user.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
