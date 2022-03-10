@extends('layouts.app')

@section('title','Mostrar usuarios')

@section('sidebar')
     <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{url('home')}}">Ir a home</a></li>

      </ul>
    </div>
  </nav>

@endsection

@section('content')

<h4>Crear blog</h4>
    
      <div class="row">
      <form class="col s12" method="POST" action="{{route('blog.store')}}" id="boton2" enctype="multipart/form-data" >
      @csrf
        <div class="row">

          <div class="input-field col s12">
            Titulo:<textarea form="boton2" class="materialize-textarea" name="titulo"></textarea>
          </div>
          <div class="input-field col s12">
            Resumen :<textarea form="boton2" class="materialize-textarea"  name="resumen"></textarea>
          </div>
          <div class="input-field col s12">
            Contenido :<textarea form="boton2" class="materialize-textarea" name="contenido"></textarea>
          </div>
          <div class="input-field col s12">
          Imagen:<br><input type="file" name="imagen" form="boton2"><br>
          <input type="hidden" name="id" value="{{$user->id}}">          </div>
          <div class="input-field col s12">
           <button class="btn waves-effect waves-light" type="submit" >Enviar</button>
          </div>
        </div>
      </form>
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
@stop