@extends('layouts.master')
@section('title')
       Tampilan Category
@endsection
@section('content')



<a href="category/create" class="btn btn-primary btn- sm my-3">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($genres as $item)
    <tr>
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td >{{$item->name}}</td>
          <td >
            <form action="/category/{{$item->id}}" method="POST">
            @method('DELETE')
            @csrf
            <a href="/category/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
            <a href="/category/{{$item->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            
            
            </form>


          
        
            </td>
          <td ></td>
        </tr>
    @empty
    <p>No Users</p>

    @endforelse
    
  </tbody>
</table>


@endsection