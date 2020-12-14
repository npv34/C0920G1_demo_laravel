@extends('front-end.master')
@section('page-content')
    <div class="col-12 col-md-12">
        <div class="row">
            @foreach($posts as $key=>$post)
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">{{ $post->desc }}</p>
                            <a href="{{ route('showDetailPost', $post->id) }}" class="btn btn-primary">Đọc tiếp</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
