@extends('layouts.master')
@section('title')
       Create New Account
@endsection
@section('content')


<form action="/category" method="POST">
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @csrf
  <div class="mb-3">
    <label class="form-label">Genre Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Genre Descrition</label>
    <textarea class="form-control" name="description"  cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection