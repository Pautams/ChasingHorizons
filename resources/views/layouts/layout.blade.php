<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Chasing Horizons</title>
       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/css/main.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
        <!-- Scripts -->
        
       <script src="{{ asset('js/app.js') }}" defer></script>
       <script src="https://kit.fontawesome.com/50965c69e9.js" crossorigin="anonymous"></script>
       
        

    </head>
    
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid list-inline"> 
            
              <ul class="nav">
                <li class="nav-item" >

                  <a class="nav-link active" href="/">
                    <i class="fas fa-car fa-2x text-white" data-toggle="tooltip" data-placement="bottom" title="book a ride"></i>
                  </a>
                </li>
              
              
                  @can('manage-all')
                    <li class="nav-item" >
                      <a class="nav-link text-white text-xl-left" href="/main">MANAGE</a>
                    </li>
                  @endcan
                  
                  @can('user')
                  <li class="nav-item" >
                    <a class="nav-link text-white text-xl-left" href="#">BOOKINGS</a>
                  </li>
                  @endcan

                  @can('driver')
                  <li class="nav-item" >
                    <a class="nav-link text-white text-xl-left" href="/schedule">SCHEDULE</a>
                  </li>
                  @endcan
                   
                
                <li class="nav-item" >
                <a class="nav-link text-white text-xl-left" href="/">HOME</a>
                </li>
       
                <li class="nav-item" >
                  <a class="nav-link text-white text-xl-left" href="/cars">CARS</a>
                </li>
        
              </ul>
              
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto list-inline">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} 
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                @can('manage-all')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                        User Management
                                    </a>
                                @endcan
                               

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            
            
            </div>

          </nav>
          @include('partials.alert')
          @yield('content')

        <br><br><br><br><br>
        
        <footer>Copyright 2020 Chasing Horizons</footer>
 
    </body>
    
    </html>