@extends('master.master')
@section('title', 'data')

@section('content')
<section class="jumbotron text-white rounded bg-dark">
    <div class="container">
      <h1 class="display-6 mt-5 font-italic text-center">Ayo Isi Data</h1>
    </div>
</section>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-6 blog-main">
<form style="margin-top: 10%" action = "/data" method= "post">
@csrf
    <div class="form-group">
      <label for="InputNama">NISN</label>
      <input name="nisn" type="number" class="form-control" id="InputNisn">
      @error('nisn')
        <div class="small text-danger"> {{$message}} </div>
        @enderror
      <label for="InputNama">Nama</label>
      <input name="nama" type="text" class="form-control" id="InputNama">
      @error('nama')
        <div class="small text-danger"> {{$message}} </div>
        @enderror
    </div>
    <div class="form-group">
      <label for="InputTelepon">Jurusan</label>
      <input name="jurusan" type="text" class="form-control" id="InputJurusan">
      @error('jurusan')
        <div class="small text-danger">{{ $message }} </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>
</main>

@endsection 