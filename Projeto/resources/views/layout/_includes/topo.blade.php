<!DOCTYPE html>
<html>
  <head>
		<title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
		<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
		<header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="nav-wrapper green">
          <div class="container">
            <a href="#!" class="brand-logo">Produtos</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ route('admin.produtos') }}">Menu</a></li>
              <li><a href="">Estoque</a></li>
            </ul>
            <ul class="sidenav" id="mobile">
              <li><a href="">Home</a></li>
              <li><a href="">Cursos</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
