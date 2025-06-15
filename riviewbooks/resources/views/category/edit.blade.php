@extends('layouts.master')
@section('title')
       Create New Account
@endsection
@section('content')


<form action="/category/{{$category->id}}" method="POST">
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @method('PUT')


    @csrf
  <div class="mb-3">
    <label class="form-label">Genre Name</label>
    <input type="text" class="form-control" value="{{$category->name}}" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Genre Descrition</label>
    <textarea class="form-control" name="description"  cols="30" rows="10">{{$category->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection