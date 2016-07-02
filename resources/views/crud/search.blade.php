@extends('templates.default')

@section('content')
  <div class="row">
    <div class="col-s12">
      <h4>Hasil Pencarian</h4>
      <hr>
      @if(count($cruds) > 0)
        <table class="highlight responsive-table">
          <thead class="blue lighten-2">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>
                Opsi
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($cruds as $key => $value)
              <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->alamat }}</td>
                <td>
                  <a href="{{ URL('crud/' . $value->id) }}" class="btn waves-effect waves-light"><i class="material-icons right">visibility</i>Lihat</a>
                  <a href="{{ URL('crud/' . $value->id . '/edit') }}" class="btn waves-effect waves-light"><i class="material-icons right">edit</i>Edit</a>
                  <form action="{{ URL('crud/' . $value->id) }}" method="post">
                    <input type="submit" name="delete" value="Hapus" class="btn waves-effect waves-light">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @else
          <h4>Data Tidak Ditemukan</h4>
      @endif
    </div>
  </div>
@endsection
