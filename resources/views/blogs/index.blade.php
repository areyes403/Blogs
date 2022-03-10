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

<br>
<a class="waves-effect waves-light btn" href="{{route('crear.blog', $user->id)}}" ><i class="material-icons right">add_box</i>Agregar Blog</a>

    @foreach ($user->blogs as $blog)      
        @php
        $iduser =$user->id
        @endphp

        <div class="card Small" >
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="https://www.dzoom.org.es/wp-content/uploads/2017/07/seebensee-2384369-810x540.jpg" width="150" height="120">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{$blog->titulo}}<br>Autor:{{$blog->user->name}}<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Resumen<i class="material-icons right">close</i></span>
      <p>{{$blog->resumen}}</p>
    </div>
    <div class="card sticky-action">
 
    <div class="card-action">
    <a href="{{route('mostraruser.blogs',$blog->id)}}">Ver</a> 
    @if($user->role=="administrador") 

    <a href="{{route('blog.edit', $blog->id)}}">Modificar</a>
    <form method="POST" action="{{route('blog.destroy', $blog->id)}}">
            @csrf
                @method('DELETE')
            <button class="btn waves-effect waves-light" type="submit" >Eliminar</button>
    </form>
    @endif
    
    
    </div>

    <div class="card-reveal">
    
    </div>
  </div>
  </div>
       
    @endforeach

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