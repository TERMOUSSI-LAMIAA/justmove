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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        /* navbar */
        .custom-navbar-height {
    /* Set a minimum height for the navbar */
    min-height: 70px; /* Adjust this value as needed */
    
    /* Adjust internal padding for elements within the navbar */
    padding-top: 10px; 
    padding-bottom: 10px;

    /* Ensure proper alignment of elements */
    display: flex;
    align-items: center;
}

.custom-navbar-height .navbar-brand {
    /* Adjust brand/logo size to fit within the increased navbar height */
    font-size: 1.5em;
}

.custom-navbar-height .nav-link {
    /* Adjust link padding for consistency */
    padding-top: 15px; 
    padding-bottom: 15px;
}
/* carroussel  */
.custom-carousel-caption {
    /* Font settings */
    font-family: 'Arial', sans-serif;
    font-size: 1.5em;

    /* Text shadow for better visibility on dark images */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);

    /* Centering the caption within the carousel */
    top: 50%;
    transform: translateY(-50%);

    /* Text alignment for centered text */
    text-align: center;

    /* Text color for visibility */
    color: white;

    /* Padding for spacing around text */
    padding: 10px;

    /* Background color and opacity to add contrast behind text */
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
/* end carrousel */
      
        /* style FAQ */


       
    </style>

</head>

<body>


    <div id="wrapper">
        <!-- Navigation Bar -->
     
     
            @include('layouts.navMember')


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
        
        <div class="container-fluid">
            @yield('content')
        </div>
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
            <img src="{{ URL::asset('/images/h.png') }}" alt="JustMove Logo" class="navbar-logo" height="80">
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
            <p class="mb-1"><a href="mailto:info@justmove.com" class="link-light">info@justmove.com</a></p>
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







    </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
