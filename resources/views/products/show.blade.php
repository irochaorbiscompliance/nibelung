@extends('layouts.master')

@section('content')

    <p> {{ $product->make }} </p>
    <p> {{ $product->model }}</p>
    <p> {{ $product->description }}</p>

@endsection
