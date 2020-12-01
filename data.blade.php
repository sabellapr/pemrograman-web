@extends('master.master')
@section('title', 'data')

@section('content')
<section class="jumbotron text-white rounded bg-dark">
    <div class="container">
      <h1 class="display-6 mt-5 font-italic text-center">Ayo Isi Data</h1>
<div class="col-sm-6" style="margin-top: 10%">
<form style="margin-top: 10%" action = "/data" method= "post">
@csrf
    <div class="form-group">
      <label for="InputNama">Nama</label>
      <input type="name" class="form-control" id="InputNama">
    </div>
    <div class="form-group">
      <label for="InputTelepon">Telepon</label>
      <input type="name" class="form-control" id="InputTelepon">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    </div>
</section>
@endsection 