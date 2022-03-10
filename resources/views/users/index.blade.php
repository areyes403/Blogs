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
        <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal" href="{{route('user.create')}}">
        <i class="material-icons">add</i>

      </a>
    </div>
  </nav>

@endsection

@section('content')
<br>
<br>
    @foreach ($usuarios as $user)
    Usuario: {{$user ->id}}<br>
    Nombre Usuario: {{$user->name}}<br>
    Rol: {{$user->role}}
    <a class="waves-effect waves-light btn" href="{{route('user.show', $user->id)}}">Ver</a>
    <a class="waves-effect waves-light btn" href="{{route('user.edit', $user->id)}}">Modificar</a>
    
    
        <form method="POST" action="{{route('user.destroy', $user->id)}}">
            @csrf
                @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
<br>
    @endforeach

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