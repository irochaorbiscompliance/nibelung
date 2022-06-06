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
            <td contenteditable="true" id="param{{ $product->id }}" onclick="selectCell(this.id)"></td>
        </tr>
    @endforeach
</table>

<script>
    function selectCell(clicked_id) {
        document.getElementById(clicked_id).innerHTML = clicked_id;
    }
</script>

<!--
<br>
<br>
<button id="1" onClick="reply_click(this.id)">B1</button>
<button id="2" onClick="reply_click(this.id)">B2</button>
<button id="3" onClick="reply_click(this.id)">B3</button>
<p id="response"></p>
    
<script type="text/javascript">
  function reply_click(clicked_id)
  {
      document.getElementById("response").innerHTML = clicked_id;
  }
</script>

<script>
    function paramInsert() {
        document.getElementById("param{{ $product->id }}").innerHTML = "Hello World";
    }
</script>
-->
@endsection