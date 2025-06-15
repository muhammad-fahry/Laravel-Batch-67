@extends('layouts.master')
@section('title')
       Detail
@endsection
@section('content')

<h1 class="text-primary">{{$category->name}}</h1>
<p>{{$category->description}}</p>


@endsection