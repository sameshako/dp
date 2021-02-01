@extends('layouts.front.app')
@section('content')

    <div class="blog-1">
        <div class="blog-photo">
            <img src="{{ asset('storage/'. $blog->image) }}" alt="blog" class="img-fluid" style="height: 500px; width: 200px">
            <div class="user">
                <div class="avatar">
                    <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">
                </div>
                <div class="name">
                    <h5>{{ $blog->blogUser['name']}}</h5>
                </div>
            </div>
        </div>
        <div class="detail">
            <h2>
                <a href="{{ route('blogs.show', $blog->id)}}">{{ $blog->title }}</a>
            </h2>
            <p>{!! $blog->body !!}</p>
            <div class="blog-footer clearfix">
                <div class="float-left">
                    <p class="date"><i class="flaticon-calendar"></i> {{ $blog->created_at->format('d.m.y') }}</p>
                </div>
            </div>
        </div>
    </div>


@endsection