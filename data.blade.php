@extends('master.master')
@section('title', 'data')
   
@section('content')
<form style="margin-top: 10%" action = "/data" method= "post">
@csrf
  <div class="form-group">
    <label for="exampleInputNama">Nama</label>
    <input name="nama" type="text">
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Telepon</label>
    <input name="telepon" type="text">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection