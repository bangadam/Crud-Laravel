@extends('templates.default')

@section('content')
  <div class="row">
    <div class="col s12">
      <h4 class="blue-text text-lighten-2">Tambah Data Baru</h4>

      <!-- Menampilkan pesan -->
      @if($errors->any())
        <ul class="card-panel red darken-1">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif

      <form action="{{ URL('crud') }}" method="post">
        <div class="input-field">
          <label for="nama">Nama</label>
          <input type="text" name="nama" value="" placeholder="Nama Anda">
        </div>

        <div class="input-field">
          <label for="email" data-error="wrong" data-succes="right">Email</label>
          <input type="email" name="email" class="validate">
        </div>

        <div class="input-field">
          <label for="alamat">Alamat</label>
          <input type='text' name="alamat" placeholder="Alamat Anda">

        </div>

        <input type="submit" name="tambah" class="btn waves-effect waves-light red" value="Tambah">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>

    </div>
  </div>
@endsection
