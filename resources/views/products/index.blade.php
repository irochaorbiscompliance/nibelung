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
            <td
                data-bs-toggle="popover"
                title="Edit parameters"
                data-bs-content=
                    "
                        <div id='pop{{ $product->id }}'>Hello</div>
                    "
                contenteditable="true"
                id="param{{ $product->id }}"
                onclick="selectParamCell(this.id)"></td>
            
        </tr>
    @endforeach
</table>

<script>
    function selectParamCell(clicked_id) {
        document.getElementById(clicked_id).innerHTML = clicked_id;
        let $popid = "pop" + clicked_id;
        document.getElementById($popid).innerHTML = $popid;
    }

</script>
<br>

<h1></h1>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl, /*True in order to edit popover html*/{html: true}));
</script>

<!--
<script>
    function selectParamCell(clicked_id) {
        document.getElementById(clicked_id).innerHTML = clicked_id;
    }
</script>


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