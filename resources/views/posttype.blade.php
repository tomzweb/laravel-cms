@extends('layout.master')

@section('title', $type->title)

@section('sidebar')

@endsection

@section('content')

    <h1>{{ $type->name }}</h1>

    @if ($type->content)
    <div class="jumbotron">
        {{ $type->content }}
    </div>
    @endif

    @include('partials.list', ['posts' => $type->posts])

    <a class="btn btn-primary mb-4" href="{!! url('/'.$type->slug."/create") !!}">Create a {{ $type->name }}</a>


@endsection