@extends('layouts.guest')

@section('content')
    {{-- carrousel --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="{{ URL::asset('/images/dumbbells_gym_fitness_220152_3840x2160.jpg') }}" alt="img"
                    class="d-block w-100">
                <div
                    class="carousel-caption d-flex flex-column justify-content-center align-items-center custom-carousel-caption">
                    <h1>Welcome to the Gym</h1>
                    <p>Your fitness journey starts here.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/basketball_ball_sport_115164_3840x2160.jpg') }}" alt="img"
                    class="d-block w-100">
                         <div
                    class="carousel-caption d-flex flex-column justify-content-center align-items-center custom-carousel-caption">
                    <h1>Welcome to the Gym</h1>
                    <p>Your fitness journey starts here.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('/images/ball_barbell_sports_151368_3840x2160.jpg') }}" alt="img"
                    class="d-block w-100">
                         <div
                    class="carousel-caption d-flex flex-column justify-content-center align-items-center custom-carousel-caption">
                    <h1>Welcome to the Gym</h1>
                    <p>Your fitness journey starts here.</p>
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
        <img class="img-fluid rounded" loading="lazy" src="{{ URL::asset('/images/basketball_ball_sport_115164_3840x2160.jpg') }}" alt="About 1">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="mb-3">Who Are We?</h2>
            <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p>
            <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p>
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Versatile Brand</h2>
                    <p class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Digital Agency</h2>
                    <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
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
        <h2>Our coaches</h2>
        <div class="row">
            @foreach ($users as $user)
                <div class="col-lg-4 mb-3">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="{{ asset('storage/' . $user->photo) }}" alt="User Image" class="w-100">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">{{ $user->name }}</h4>
                            <h5>{{ $user->email }}</h5>
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fa-brands fa-whatsapp"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
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

    {{-- our sports --}}

<div>
  <b-card no-body class="overflow-hidden" style="max-width: 540px;">
    <b-row no-gutters>
      <b-col md="6">
        <b-card-img src="{{ URL::asset('/images/basketball_ball_sport_115164_3840x2160.jpg') }}" alt="Image" class="rounded-0"></b-card-img>
      </b-col>
      <b-col md="6">
        <b-card-body title="Horizontal Card">
          <b-card-text>
            This is a wider card with supporting text as a natural lead-in to additional content.
            This content is a little bit longer.
          </b-card-text>
        </b-card-body>
      </b-col>
    </b-row>
  </b-card>
</div>

    {{-- FAQ --}}
    <!-- FAQ 1 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row gy-5 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6">
        <img class="img-fluid rounded" loading="lazy" src="{{ URL::asset('/images/dumbbells_gym_fitness_220152_3840x2160.jpg') }}" alt="How can we help you?">
      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">
            <h2 class="h1 mb-3">How can we help you?</h2>
            <p class="lead fs-4 text-secondary mb-5">We hope you have found an answer to your question. If you need any help, please search your query on our Support Center or contact us via email.</p>
            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How Do I Change My Billing Information?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To change your billing information, please follow these steps:</p>
                    <ul>
                      <li>Go to our website and sign in to your account.</li>
                      <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                      <li>Under the "Billing Information" section, click on "Edit."</li>
                      <li>Make your changes and click on "Save."</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How Does Payment System Work?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A payment system is a way to transfer money from one person or organization to another. It is a complex process that involves many different parties, including banks, credit card companies, and merchants.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How Do I Cancel My Account?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To cancel your account, please follow these steps:</p>
                    <ul>
                      <li>Go to our website and sign in to your account.</li>
                      <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                      <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                      <li>Enter your password and click on "Cancel Account."</li>
                    </ul>
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
