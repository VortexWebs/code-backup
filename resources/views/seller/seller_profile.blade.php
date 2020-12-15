@extends('seller/seller-layout')
@section('header')
    <title> Seller Profile </title>
@endsection
@section('body')
    <h1> Hello : {{ session('user') }} </h1>
    {{ $data }}
@endsection
