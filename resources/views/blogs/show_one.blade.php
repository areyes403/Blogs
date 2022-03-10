@extends('layouts.app')

@section('title', 'Mostrar Usuarios')

@section('sidebar')

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
       <li> @if(Auth::check())
        <form id="logout-form" action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
            <button class="btn waves-effect waves-light" type="submit" name="action">Salir</button>
        </form>
        @endif
    </li>

 
  
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Blogs</a>
    <ul class="right hide-on-med-and-down">
    <li><a href="{{url('home')}}">Ir a home</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Opciones<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

@endsection

@section('content')



 


 <b>Nombre del blog:</b> {{$blog->titulo}}<br><br>
 <b>Resumen: </b>{{$blog->resumen}}<br><br>
 <b>Contenido: </b>{{$blog->contenido}}<br><br>
 <b>Imagen:</b> <img src="{{$blog->imagen}}">
 {{$blog->imagen}}<br><br>



<!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Detalles</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Detalles del blog</h4>
      <p>
       <b>Nombre del blog:</b> {{$blog->titulo}}<br>
      <b>Autor:</b> {{$blog->user->name}}</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

@endsection

@section('footer')

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/abrahamsahid.reyesrodriguez">Mi facebook</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

@endsection