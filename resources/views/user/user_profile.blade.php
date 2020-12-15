@extends('user/user-layout')
@section('header')
    <title> User Profile </title>
@endsection
@section('body')
    <h1> Hello : {{ session('user') }} </h1>
    {{ $data }}
@endsection
