@extends('layout.master')

@section('title', $post->title)

@section('sidebar')

@endsection

@section('content')

    <h1>{{ $post->title }}</h1>

    <div>
        {{ $post->content }}
    </div>

@endsection