@extends('layout.master')

@section('title', 'Home')

@section('sidebar')

@endsection

@section('content')

    @include('partials.formsuccess')

    <form method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        @include('posttype.form')
    </form>

    @include('partials.formerrors')

@endsection