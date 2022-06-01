@extends('layouts.master')

@section('content')

<ul>
    @foreach($products as $product)
        <li><a href="/products/{{ $product->id }}">{{ $product->make }}</a></li>
    @endforeach
</ul>

@endsection
