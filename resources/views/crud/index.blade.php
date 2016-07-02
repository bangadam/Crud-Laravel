@extends('templates/default')

@section('content')
<div class="row">
  <div class="col s12">
    <h4 class="blue-text text-lighten-2">Data Anggota</h4>
    <!-- Untuk Menampilkan Pesan -->
    @if(Session::has('pesan'))
      <div class="card-panel red darken-1">
        <span class="white-text">{{ Session::get('pesan') }}</span>
      </div>
    @endif
    <!-- Search Box -->
    <nav>
      <div class="nav-wrapper">
        <form action="{{ route('crud.hasil') }}" role="search" method="get">
          <div class="input-field">
            <input type="search" placeholder="cari" name="cari">
            <label for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>
    
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
         @foreach($crud as $key => $value)
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
  </div>
</div>
 @endsection
