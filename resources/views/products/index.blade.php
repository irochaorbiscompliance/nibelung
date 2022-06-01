@extends('layouts.master')

@section('content')


<table>
    <tr>
        <th>ID</th>
        <th>Make</th>
        <th>Model</th>
        <th>Description</th>
    </tr>  
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->make }}</td>
            <td>{{ $product->model }}</td>
            <td>{{ $product->description }}</td>
        </tr>
    @endforeach
</table>


@endsection
