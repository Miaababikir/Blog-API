@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{ asset('vendor/css/blog.css') }}">

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="blog-single-content bordered blog-container">
                <div class="blog-single-head">
                    <h1 class="blog-single-head-title">{{ $post->title }}</h1>
                    <div class="blog-single-head-date">
                        <i class="icon-calendar font-blue"></i>
                        <a href="javascript:;">{{ $post->created_at->diffForHumans() }}</a>
                    </div>
                </div>
                <div class="blog-single-desc">
                    {{ $post->body }}
                </div>
            </div>
        </div>
    </div>


@endsection
