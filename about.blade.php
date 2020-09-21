@extends('master.master')
@section('title', 'about')
   
@section('content')
<<main role="main">

    <section class="jumbotron text-white rounded bg-dark">
      <div class="container">
        <h1 class="display-6 mt-4 font-italic text-center">About Sabella PR</h1>
        <p class="lead text-light">Ini adalah contoh dari about</p>
      </div>
    </section>
  
    
    <div class="row">
        <div class="container">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Personal Info</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nama</h6>
                <small class="text-muted">Sabella Pinuji R</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Sekolah</h6>
                <small class="text-muted">SMKN 1 Surabaya</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Jurusan</h6>
                <small class="text-muted">Rekayasa Perangkat Lunak</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Email</h6>
                <small>sabellaapr@gmail.com</small>
              </div>
            </li>
          </ul>
        </div>

       
@endsection
