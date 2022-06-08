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
            <td id="param{{ $product->id }}">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="switchRF{{ $product->id }}" onclick="selectRFSwitch(this.id)"> <span>Radio Frequency</span>
                 </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="safety{{ $product->id }}"> <span>Electrical Safety</span>
                </div>
            </td>              
        </tr>
    @endforeach
</table>

<script>
    function selectRFSwitch(clicked_id) {

    }
</script>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!--
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl, /*True in order to edit popover html*/{html: true}));
</script>
-->
@endsection