@extends('layouts.master')

@section('content')

<form method="post" action="/products" enctype="multipart/form-data">

  @csrf

  <input name="make" type="text" class="form-control" id="make" placeholder="Make">

  <input name="model" type="text" class="form-control" id="model" placeholder="Model">

  <input name="description" type="text" class="form-control" id="description" placeholder="Description">

  <button type="submit">Submit</button>

  @if(count($errors))
    <div class="form-group">
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif
</form>

@endsection