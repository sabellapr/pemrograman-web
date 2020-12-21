@extends('master.master')
@section('title', 'View Data')
   
@section('content')
<section class="jumbotron text-white rounded bg-dark">
    <div class="container">
    <div class="col-sm-12">
        <h1 class="display-6 mt-5 font-italic text-center">View Data</h1>
    </div>
</div>
</section>
<main role="main" class="container">
    <div class="row">
      <div class="col-md-12 blog-main">
<table class="table table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nis</th>
        <th scope="col">Nama</th>
        <th scope="col">Jurusan</th>
      </tr>  
    </thead>
    <tbody>
        @foreach ($dataa as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->nis }} </td>
        <td>{{ $item->nama }} </td>
        <td>{{ $item->jurusan }}</td>
      </tr>
  </table>
</div>
</div>
</div>
</main>

@endsection