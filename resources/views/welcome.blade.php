<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --}}
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap JavaScript (optional, if you're using Bootstrap JS features) -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <!-- Styles -->
        <style>
                /* Ensure that the body fills the screen */
        html, body {
            height: 100%;
        }

        /* Make the content section flexible and push footer to the bottom if content is less */
        .content-wrapper {
            flex: 1;
        }

        /* Optional: Customize the footer's appearance */
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }    
         </style>
    </head>
 <body class="d-flex flex-column">
                   
                        <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Home</a>
   
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                        
  </div>
</nav>
    <div class="content-wrapper">
        <div class="container">
            <h1 class="mt-5">Main Content</h1>
            <p>This is the content area. If this section is short, the footer will be pushed to the bottom of the page.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Your Website. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </body>
</html>
