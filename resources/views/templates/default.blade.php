<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Materialize -->
    <link rel="stylesheet" href="{{ URL::to('asset/css/materialize.min.css') }}">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <nav  class="light-blue darken-1">
     <div class="nav-wrapper container">
       <a href="#!" class="brand-logo">Crud Laravel 5.2</a>
       <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
     <ul class="right hide-on-med-and-down">
       <li><a href="{{ URL('crud') }}">Lihat Daftar</a></li>
       <li><a href="{{ URL('crud/create') }}">Buat Data Baru</a></li>
     </ul>
     <ul id="nav-mobile" class="side-nav">
       <li><a href="{{ URL('crud') }}">Lihat Daftar</a></li>
       <li><a href="{{ URL('crud/create') }}">Buat Data Baru</a></li>
     </ul>
     </div>
   </nav>
    <div class="container">
        @yield('content')
    </div>


    <script type="text/javascript">
    $(function(){
      $(".button-collapse").sideNav();
    });
    </script>
    <!--Import jQuery before materialize.js-->

     <script type="text/javascript" src="{{ URL::to('asset/js/materialize.min.js') }}"></script>
  </body>
</html>
