
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>


    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
   



        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    


</head>
<body>
    <head>
        <title> App Name -@yield('title')</title>
    </head>
    <body>


        @section('sidebar')
          
        @show

        <div class="container">
            @yield('content')
        </div>


        @section('footer')
        @show
        


        <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script>
      $(".dropdown-trigger").dropdown();
      </script>

      <script>
      $(document).ready(function(){
        $('.tooltipped').tooltip();
        });
      </script>
    
        <script>
        $(document).ready(function(){
        $('.collapsible').collapsible();
      });</script>

      <script>
      $(document).ready(function(){
        $('.modal').modal();
      });
      </script>

      <script>
      $(document).ready(function(){
    $('.carousel').carousel();
  });
      </script>

    </body>
</body>
</html>