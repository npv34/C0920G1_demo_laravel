@extends('front-end.master')
@section('page-content')
    <h3>{{ $post->name }}</h3>
    <p>{{ $post->content }}</p>
    <div>
        Luot xem: {{ session('post-'. $post->id) }}
    </div>
@endsection
