<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Package</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>

      @include('ecommerce::ecommerce/partials/sections.nav')

        @yield('content')

        <footer>
          <div class="footer-content container">
              <div class="made-with"> by Amoungui Serge</div>
              <ul>
                  <li>Follow Me: </li>
                  <li><a href="https://andremadarang.com"><i class="fa fa-globe"></i></a></li>
                  <li><a href="https://www.youtube.com/drehimself"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="https://github.com/drehimself"><i class="fa fa-github"></i></a></li>
                  <li><a href="https://twitter.com/drehimself"><i class="fa fa-twitter"></i></a></li>
              </ul>
          </div> <!-- end footer-content -->
      </footer>      
    </body>
</html>
