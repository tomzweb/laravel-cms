@extends('layout.master')

@section('title', 'Home')

@section('sidebar')

@endsection

@section('content')

    @foreach($types as $type)
        <h2>{{ $type->name }}</h2>
        @include('partials.list', ['posts' => $type->posts])
    @endforeach

    <div>
        <a class="btn btn-primary" href="{!! url('/post-type/create') !!}">Create new post type.</a>
    </div>


@endsection