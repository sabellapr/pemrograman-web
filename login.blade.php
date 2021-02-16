@extends('master.master')
@section('title', 'data')

@section('content')
<section class="jumbotron text-white rounded bg-light">
    <div class="container">
      <h1 class="display-6 mt-5 font-italic text-center text-dark">Login Dulu</h1>
    </div>
</section>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-6 blog-main">

<form class="form-group p-4" action = "{{ route('postlogin') }}" method= "post">
    @csrf
    <div class="mb-3">
      <label for="exampleFormGroupEmail2" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleFormGroupEmail2" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormGroupPassword2" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleFormGroupPassword2" placeholder="Password">
    </div>
    <div class="form-check">
            {{-- <input type="checkbox" class="form-check-input" id="groupCheck2"> --}}
            {{-- <label class="form-check-label" for="groupCheck2"> --}}
      </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
</div>
</main>

@endsection 