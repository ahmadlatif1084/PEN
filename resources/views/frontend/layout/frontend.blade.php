<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="<?php echo url('/');?>/public/css/app.css" rel="stylesheet">
        <link href="<?php echo url('/');?>/public/css/bootstrap.min.css" rel="stylesheet">
         <link href="<?php echo url('/');?>/public/css/style.css" rel="stylesheet">
         <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

         @yield('extra_css')
          <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    </head>
    <body>
           <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('inventory') }}">School Inventory Form</a></li>
                                <li><a href="{{ url('monitoring') }}">School Monitoring Form</a></li>
                                <li><a href="{{ url('survey') }}">School Survey Form</a></li>
                                <li><a href="{{ url('training') }}">Training Need Assessment - Monitoring Tool</a></li>
                                    <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                            </ul>
            
            </div>
        </div>
    </nav>



 @yield('content')           
      

        

              <!-- Scripts -->
     <script src="<?php echo url('/');?>/public/js/vue.min.js"></script>
    <script src="<?php echo url('/');?>/public/js/app.js"></script>
     <script src="<?php echo url('/');?>/public/js/bootstrap.min.js"></script>
    <script src="<?php echo url('/');?>/public/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo url('/');?>/public/js/external.js"></script>
    
    </body>
</html>
      