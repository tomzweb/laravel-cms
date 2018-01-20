@extends('layout.master')

@section('title', 'Home')

@section('sidebar')

@endsection

@section('content')

    <form method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        @include('post.form')
    </form>

    @include('partials.formerrors')

@endsection