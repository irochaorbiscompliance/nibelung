@extends('layouts.master')

@section('content')
<br>
<table>
    <tr>
        <th>CMD</th>
        <th>ID</th>
        <th>Make</th>
        <th>Model</th>
        <th>Description</th>
        <th>Parameters</th>
    </tr>  
    @foreach($products as $product)
        <tr>
            <td><a href="/products/{{ $product->id }}">Edit</a></td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->make }}</td>
            <td>{{ $product->model }}</td>
            <td>{{ $product->description }}</td>
            <td id="param{{ $product->id }}" onclick="paramInsert()"></td>
        </tr>
    @endforeach
</table>

<script>
    function paramInsert() {
        document.getElementById("param{{ $product->id }}").innerHTML = "Hello World";
    }
</script>


@endsection