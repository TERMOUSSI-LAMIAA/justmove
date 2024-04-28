<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar {
            background-color: #f8f9fa;
            /* Light background for navbar */
            color: #495057;
            /* Dark text for contrast */
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #495057;
            /* Default color */
        }

        .navbar .nav-link:hover {
            color: #007bff;
            /* Blue hover effect */
            text-decoration: none;
            /* No underline */
        }

        /* Sidebar Styling */
        #sidebar {
            background-color: #f8f9fa;
            /* Light background for sidebar */
            border-right: 1px solid #dee2e6;
            /* Border to separate from content */
            width: 220px;
            /* Slightly narrower */
            padding: 10px;
            /* Consistent padding */
        }

        #sidebar .nav-link {
            color: #495057;
            /* Default color */
            padding: 8px;
            /* Consistent padding */
        }

        #sidebar .nav-link:hover {
            background-color: #e9ecef;
            /* Light hover effect */
            color: #007bff;
            /* Blue hover color */
        }

        /* Sidebar submenu styling */
        #sidebar .collapse {
            background-color: #f8f9fa;
            /* Light background for nested menus */
        }

        /* Main content area styling */
        .content {
            margin-left: 220px;
            /* Offset content by sidebar width */
            padding: 20px;
            /* Consistent padding */
            background-color: #ffffff;
            /* White background for content */
            transition: all 0.3s;
            /* Smooth transition */
        }

        .content h2 {
            color: #343a40;
            /* Dark color for headings */
        }
    </style>

</head>

<body>


    <div id="wrapper">

        @include('layouts.topNav')
        <!-- Sidebar and Content -->

        <div class="d-flex">
            <!-- Navigation Bar -->
            @if (auth()->user()->type_user === 'admin')
                @include('layouts.navigationAdmin')
            @elseif (auth()->user()->type_user === 'user')
                @include('layouts.navigationUser')
            @endif


            <div class="container-fluid mt-4 mb-4">
                @yield('content')

            </div>
        </div>

        @if (session('success'))
            <div id="success-alert" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div id="error-alert" class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif






    </div>



    {{-- footer --}}
    {{-- Footer --}}
    <footer class="footer bg-dark text-light">
        <!-- Upper Section: Widgets -->
        <section class="py-5 border-top border-light">
            <div class="container">
                <div class="row gy-4 justify-content-between">

                    <!-- Logo and Address -->
                    <div class="col-12 col-md-3">
                        <div class="widget">
                            <a href="{{ route('home') }}">
                                <img src="{{ URL::asset('/images/h.png') }}" alt="JustMove Logo" class="navbar-logo"
                                    height="80">
                            </a>

                            <address class="mt-3 text-muted">
                                8014 Edith Blvd NE,<br>
                                Albuquerque, NM,<br>
                                United States
                            </address>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-12 col-md-3">
                        <div class="widget">
                            <h4 class="widget-title mb-3">Get in Touch</h4>
                            <p class="mb-1"><a href="tel:+15057922430" class="link-light">+2126145397</a></p>
                            <p class="mb-1"><a href="mailto:info@justmove.com"
                                    class="link-light">info@justmove.com</a></p>
                            <p class="mb-0">Ville Nouvelle,Safi,Morocco</p>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-12 col-md-3">
                        <div class="widget">
                            <h4 class="widget-title mb-3">Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" class="link-light">About</a></li>
                                <li><a href="#" class="link-light">Contact</a></li>
                                <li><a href="#" class="link-light">Advertise</a></li>
                                <li><a href="#" class="link-light">Terms of Service</a></li>
                                <li><a href="#" class="link-light">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="col-12 col-md-3">
                        <div class="widget">
                            <h4 class="widget-title mb-3">Follow Us</h4>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="#!" class="nav-link link-light"><i class="bi bi-facebook"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link link-light"><i class="bi bi-youtube"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link link-light"><i class="bi bi-twitter"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link link-light"><i class="bi bi-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Lower Section: Copyright and Credits -->
        <div class="bg-dark py-3 border-top border-light-subtle">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <!-- Copyright Info -->
                    <div class="col-12  text-center">
                        &copy; 2024 JustMove. All Rights Reserved.
                    </div>



                </div>
            </div>
        </div>

    </footer>




    <!-- End of Footer -->

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
