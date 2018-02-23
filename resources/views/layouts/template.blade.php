<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script>
        window.Laravel = {!! json_encode([
            'baseUrl' => url('/'),
        ]) !!}
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/navbars.css') }}" rel="stylesheet">
    

</head>
<body>
    <div id="app">
      <div class="navbar_pointage">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <a class="navbar-brand" href="#" style="    width: 210px;">
                        @if(auth::user()->users_type_id == 1)
                          Administration
                          @elseif(auth::user()->users_type_id == 2)
                          Modérateur
                          @elseif(auth::user()->users_type_id == 3)
                          Public
                          @elseif(auth::user()->users_type_id == 4)
                          Superviseur
                        @endif
                
                      </a>
                      <ul class="navbar-nav mr-auto mt-1 mt-lg-0">
                        <li class="nav-item active">
                          <a class="fa fa-bars fa-2x nav-link mt-1 " id="menu-toggle" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline nav-link my-2 my-lg-0">
                              
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                            </form>
                        </li>
                      </ul>
                      <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class=" fa fa-bell-o"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-envelope-o "></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class=" fa fa-user-o"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        Se déconnecter
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                  </nav>
                
                  <div id="wrapper">
                
                    <!-- Sidebar -->
                    <div id="sidebar-wrapper">
                        <ul class="sidebar-nav">
                            <li class="sidebar-brand">
                                <a href="#">
                                    Navigation
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class=" fa fa-user-o"></i>  Elèves</a>
                            </li>
                            <li>
                                <a href="#"><i class=" fa fa-suitcase"></i>  Professeurs</a>
                            </li>
            
                        </ul>
                    </div>
                    <!-- /#sidebar-wrapper -->
                    <div class="container">

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                
                            @if (session('info'))
                                <div class="alert alert-info">
                                    {{ session('info') }}
                                </div>
                            @endif
                
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            {{-- <div id="main-content">
                                <div class="container">
                                    @yield('content')
                                </div>
                            </div> --}}
                
                        </div>
                    <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                    <!-- /#page-content-wrapper -->
                
                </div>
                <!-- /#wrapper -->
      </div>
    </div>

        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>