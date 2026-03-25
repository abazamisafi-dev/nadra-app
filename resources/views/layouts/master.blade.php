<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />


        <title></title>
        <!-- Favicon-->
  
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('js/css/main.css')}}" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (for icons) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><a href="{{route('home')}}">Nadra Web</a></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('addVisa')}}">Add Visa</a>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                                <li class="nav-item dropdown">
                                    <!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logout</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        <!-- </div> -->
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>


      
        <script src="{{ asset('js/popper.min.js') }}"></script>
 
        
        <!-- Bootstrap core JS-->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

        <script>
            $('.data-table').DataTable();
        </script>

        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js')}}"></script>
        @section('pageJs')
        @show
        <!-- Bootstrap CSS -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
