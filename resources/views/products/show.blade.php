@extends('layouts.master')

@section('content')
<br>
<p> {{ $product->make }} </p>
<p> {{ $product->model }}</p>
<p> {{ $product->description }}</p>


<br>

<div class="card">
    <div class="card-header">
        Radio Frequency
    </div>
    <div class="card-body">
        <p class="card-title">Frequency allocation</p>
        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
    </div>
</div>

@endsection
