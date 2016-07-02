@extends('templates.default')

@section('content')
  <div class="row">
    <div class="col-s6">
      <h4>Tampilkan Data</h4>
      <div class="card-panel">
        <h2 class="blue-text text-darken-2">{{ $crud->nama }}</h2>
        <hr>
        <h5>Email :</h5>{{ $crud->email }}
        <hr>
        <h5>Alamat :</h5>{{ $crud->alamat }}
      </div>
    </div>
  </div>
@endsection
