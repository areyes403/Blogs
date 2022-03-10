@extends('layouts.app')

@section('title', 'Ver Usuarios')

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
   
    <h2 style="text-align: center">Detalles del usuario</h2>
    <p style="text-align: center">
        Nombre del usuario :  {{$usuario->name}} <br>
        Fecha de creación :  {{$usuario->created_at}} <br>
        Rol :{{$usuario->role}}
        <br>    
        
 
@endsection

@section('footer')

   <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Estoy en index de usuarios</h5>
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