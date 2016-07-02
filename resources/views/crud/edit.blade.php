@extends('templates.default')

@section('content')
  <div class="row">
    <div class="col-m6">
      <h4>Edit {{ $crud->nama }}</h4>
      @if($errors->any())
        @foreach($erros->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      @endif

      <form action="/crud/{{ $crud->id }}" method="post">
        <input type="text" name="nama" value="{{ $crud->nama }}" >
        <br>
        <input type="email" name="email" value="{{ $crud->email }}">
        <br>
        <input type="text" name="alamat" value="{{ $crud->alamat }}">

        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <input type="submit" name="edit" value="Edit" class="btn waves-effect waves-light teal">
      </form>
    </div>
  </div>
@endsection
