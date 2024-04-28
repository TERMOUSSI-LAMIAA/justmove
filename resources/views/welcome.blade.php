@extends('layouts.guest')

@section('content')
  <!-- Full-Width Carousel -->
<!-- Full-Width Carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="width: 100%;">
    <div class="carousel-inner" style="margin: 0; padding: 0;">
        <div class="carousel-item active">
            <img src="{{ URL::asset('/images/dumbbells_gym_fitness_220152_3840x2160.jpg') }}" alt="Gym Image"
                class="d-block w-100" style="object-fit: cover; height: 500px;">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center custom-carousel-caption">
                <h1>Welcome to JustMove</h1>
                <p>Your fitness journey starts here.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('/images/basketball_ball_sport_115164_3840x2160.jpg') }}" alt="Basketball Image"
                class="d-block w-100" style="object-fit: cover; height: 500px;">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center custom-carousel-caption">
                <h1>Discover Your Passion</h1>
                <p>Explore a variety of sports.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('/images/ball_barbell_sports_151368_3840x2160.jpg') }}" alt="Sports Image"
                class="d-block w-100" style="object-fit: cover; height: 500px;">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center custom-carousel-caption">
                <h1>Train with the Best</h1>
                <p>Join our expert coaches.</p>
            </div>
        </div>
    </div>
</div>

    {{-- about us --}}
    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ URL::asset('/images/pexels-rdne-7045593.jpg') }}"
                        alt="About 1">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">Who Are We?</h2>
                            <p class="lead fs-4 text-secondary mb-3">JustMove is a premier multisport club focused on supporting individuals in their fitness journeys, no matter their skill level or age.</p>
                            <p class="mb-5">Our club offers a diverse range of sports and fitness programs designed to
                                cater to various interests. Whether you're an avid athlete or just starting your fitness
                                journey, we have something for everyone. Our experienced coaches,and supportive community create an environment where you can thrive.</p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Versatile Programs</h2>
                                            <p class="text-secondary mb-0">Our extensive range of programs includes team
                                                sports, individual training, and wellness activities. We ensure that every
                                                member finds their niche.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Dynamic Community</h2>
                                            <p class="text-secondary mb-0">Our community is lively and inclusive, providing a safe space for everyone. Whether you're seeking friendly competition or a supportive atmosphere, you'll find it here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- our coaches --}}
    <div class="container mt-4">
          <h2 class="text-center text-primary font-weight-bold">Our Coaches</h2>
    <p class="text-center text-secondary mb-4">Meet our experienced coaches, dedicated to helping you achieve your fitness goals. They bring expertise and passion to every session, ensuring you get the best training possible.</p>

        <div class="row row-cols-1 row-cols-lg-4"> <!-- Specify 4 columns for large screens -->
            @foreach ($users as $user)
                <div class="col mb-4">
                    <div class="card shadow-sm h-100"> <!-- Add height: 100% for equal heights -->
                        <!-- Card Image -->
                        <img src="{{ asset('storage/' . $user->photo) }}" class="card-img-top" alt="User Image" style="height: 250px; object-fit: cover;">

                        <!-- Card Body -->
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">{{ $user->email }}</p>
                        </div>

                        <!-- Card Footer with Social Icons -->
                        <div class="card-footer text-center">
                            <ul class="social-icons d-flex justify-content-center list-unstyled">
                                <li class="mx-2">
                                    <a href="#" class="text-decoration-none">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="text-decoration-none">
                                        <span class="fab fa-whatsapp"></span>
                                    </a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="text-decoration-none">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- gallery --}}
    <!-- Gallery -->
    <div class="container mt-4">
     <h2 class="text-center text-primary font-weight-bold">Our Gallery</h2>
    <p class="text-center text-secondary mb-4">Explore some of our latest activities and events. Our gallery showcases the vibrant life at our multisport club, from intense training sessions to joyful moments shared by our members.</p>

    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="{{ URL::asset('/images/exercise_bikes_exercise_equipment_gym_209091_3840x2160.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

            <img src="{{ URL::asset('/images/pexels-shvetsa-5069180.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="{{ URL::asset('/images/pexels-julia-larson-6456160.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

            <img src="{{ URL::asset('/images/barbell_gym_sport_205786_3840x2160.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="{{ URL::asset('/images/soccer_ball_football_lawn_121273_3840x2160.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

            <img src="{{ URL::asset('/images/pexels-tima-miroshnichenko-6572615.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
        </div>
    </div>
    </div>
    <!-- Gallery -->

    {{-- FAQ --}}
    <!-- FAQ 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row gy-5 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded" loading="lazy"
                        src="{{ URL::asset('/images/pexels-ajaybhargavguduru-863988.jpg') }}" alt="How can we help you?">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-end">
                        <div class="col-12 col-xl-11">
                            <h2 class="h1 mb-3">How can we help you?</h2>
                            <p class="lead fs-4 text-secondary mb-5">We hope this FAQ section answers your questions. If you need further assistance, please explore our Support Center or contact us via email.
                            </p>
                            <div class="accordion accordion-flush" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How do I join JustMove?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p> Joining JustMove is easy. You can sign up online through our website or visit our club in person to complete the registration. We offer various membership plans to suit your needs </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How do I book classes ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                           You can book sessions through our website. Simply log in to your account,  choose a category, pick a sport, and reserve your class.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Are there medical or first-aid services available on-site ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, JustMove provides medical and first-aid services on-site to ensure the safety and well-being of our members. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
