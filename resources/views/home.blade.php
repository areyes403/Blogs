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
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Opciones<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

@endsection

@section('content')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body"> <h4>Bienvenido(a)  {{ auth()->user()->name }} </h4></div>

                    <ul class="collapsible">
                        <li>
                        <div class="collapsible-header"><i class="material-icons">assignment</i>Ver Blogs</div>
                        <div class="collapsible-body"><span>Aqui puedes ver todos los blogs creados de los usuarios
                            <a href="{{route('mostrar.blogs',auth()->user()->id)}}">Ir</a> <br>
                        </span></div>
                        </li>
                        <li>
                        <div class="collapsible-header"><i class="material-icons">account_circle</i>Mi Perfil</div>
                        <div class="collapsible-body"><span>Puedes administrar tus blogs aqui.
                        <a href="{{route('blog.show',auth()->user()->id)}}">Ir</a> <br>
                        </span></div>
                        </li>
                        @if(auth()->user()->role=="administrador")
                                <li>
                            <div class="collapsible-header"><i class="material-icons">contacts</i>Administrar usuarios</div>
                            <div class="collapsible-body"><span>Al tener el superpoder de ser admin puedes crear, eliminar y ver todos los usuarios.
                            <a href="{{route('user.index')}}">Ir</a> <br>
                            </span></div>
                            </li>

                        @endif
                        
                    </ul>




                     <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>


                    
                    
                    
                </div>
            </div>
        </div>
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
