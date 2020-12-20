@extends('master.master')
@section('title', 'View Data')
   
@section('content')
<main role="main">
<div class="jumbotron text-white rounded bg-dark">
<div class="container">
    <div class="col-sm-12">
        <h1 class="display-6 mt-5 font-italic text-center">View Data</h1>
    </div>
</div>
</div>
<div class="row">
<div class="container">
    <div class="col-sm-12">
<table class="table table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">nis</th>
        <th scope="col">nama</th>
        <th scope="col">jurusan</th>
      </tr>  
    </thead>
    <tbody>
        @foreach ($dataa as $item)
      <tr>
        <th scope="row">1</th>
        <td>{{ $item->nis }} </td>
        <td>{{ $item->nama }} </td>
        <td>{{ $item->jurusan }}</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>{{ $item->nis }} </td>
        <td>{{ $item->nama }} </td>
        <td>{{ $item->jurusan }} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</main>

@endsection