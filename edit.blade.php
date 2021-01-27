@extends('master.master')
@section('title', 'data')

@section('content')
<section class="jumbotron text-white rounded bg-dark">
    <div class="container">
      <h1 class="display-6 mt-5 font-italic text-center">Edit Data</h1>
    </div>
</section>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-6 blog-main">
<form style="margin-top: 10%" action = "{{ route('updateData', $student->id) }}" method= "post">
@csrf
    <div class="form-group">
      <label for="InputNama">Nisn</label>
      <input type="name" class="form-control" id="InputNisn" value="{{ $student->nisn }}">
    </div>
    <div class="form-group">
      <label for="InputTelepon">Nama</label>
      <input type="name" class="form-control" id="InputNama" value="{{ $student->nama }}">
    </div>
    <div class="form-group">
        <label for="InputTelepon">Jurusan</label>
        <input type="name" class="form-control" id="InputJurusan" value="{{$student->jurusan }}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>
</main>

@endsection 