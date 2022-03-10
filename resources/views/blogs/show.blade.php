@extends('layouts.app')

@section('title', 'Mostrar Usuarios')

@section('sidebar')

<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Proyecto Laravel</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{url('home')}}">Ir a home</a></li>
        <li><a>Logout</a></li>

      </ul>
    </div>
    <div class="nav-content">
      <span class="nav-title">Mis blogs</span>
        <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal" href="{{route('crear.blog', $user->id)}}">
        <i class="material-icons">add</i>

      </a>
    </div>
  </nav>

@endsection

@section('content')

<h4>Mis blogs:</h4><br>

    @foreach ($user->blogs as $blog)      
        @php
        $iduser =$user->id
        @endphp

        <div class="card Small" >
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="https://www.dzoom.org.es/wp-content/uploads/2017/07/seebensee-2384369-810x540.jpg" width="150" height="120">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{$blog->titulo}}<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$blog->titulo}}<i class="material-icons right">close</i></span>
      <p>{{$blog->resumen}}</p>
    </div>
    <div class="card sticky-action">
 
    <div class="card-action">
    <a href="{{route('mostraruser.blogs',$blog->id)}}">Ver</a> 
    <a href="{{route('blog.edit', $blog->id)}}">Modificar</a>
    <form method="POST" action="{{route('blog.destroy', $blog->id)}}">
            @csrf
                @method('DELETE')
            <button class="btn waves-effect waves-light" type="submit" >Eliminar</button>
    </form>
    
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