@extends('layouts.app')

@section('title')
Nomads
@endsection

@section('content')

    <!-- header -->
    <header class="text-center">
        <h1>
          Explore beautiful place
          <br>
          Easy one click
        </h1>
        <p class="mt-3">
          you will see
          <br>
          moment that you never seen
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt4">
          Get Start
        </a>
      </header>
      <!-- statistik/isi -->
      <main>
        <div class="container">
          <section class="section-stats row 
          justify-content-center" id="stats">
          <div class="col-3 col-md-2 stats-detail">
            <h2>20k</h2>
            <p>Members</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>12</h2>
            <p>Negara</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>3k</h2>
            <p>Hotel</p>
          </div>
          <div class="col-3 col-md-2 stats-detail">
            <h2>73</h2>
            <p>Partners</p>
          </div>
        </div>
      </section>
      <section class="section-popular" 
      id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center 
          section-popular-heading">
          <h2>Wisata populer</h2>
          <br>
          <p>Something that you never try <br>before in this world  </p>
          {{-- <p>before in this world</p> --}}
          </div>
        </div>
      </div>
      </section>
      <section class="section-popular-content" 
      id="popularContet">
      <div class="container">
        <!-- konten 1 -->
        <div class="section-popular-travel 
        row justify-content-center">
        @foreach ($item as $items)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel 
          text-center d-flex flex-column" 
          style="background-image: url('{{ $items->galleries->count() ? Storage::url
          ($items->galleries->first()->image) : '' }}');"
          >
          <div class="travel-country">{{ $items->location }}</div>
          <div class="travel-location">{{ $items->title }}</div>
          <div class="travel-button mt-auto">
            <a href="{{ route('detail', $items->slug) }}" class="btn btn-travel-details px-4">
              View
            </a>
          </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </section>
    <!-- networks -->
    <section class="section-network">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>
              Our Networks
            </h2>
            <p>
              Companies are trusted us
              <br>
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img 
            src="{{ url('frontend/images/partner.png')}}" 
            alt="Logo Partner" 
            class="img-partner">
          </div>
        </div>
      </div>
    </section>
    <!-- testi heading -->
    <section 
    class="section-testimonial-heading" 
    id="testimonialHeading">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>
            They are loving us
          </h2>
          <p>
            Moments were giving them
            <br>
            the best experince
          </p>
        </div>
      </div>
    </div>
    </section>
    <!-- testi konten -->
    <section class="section section-testimonial-content" 
    id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row 
        justify-content-center">
        <!-- card 1 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial 
            text-center">
              <div class="testimonial-content">
                <img 
                src="{{ url('frontend/images/avatar-1.png')}}" 
                alt="user"
                class="mb-4 rounded-circle">
                <h3 class="mb-4">Yadi</h3>
                <p class="testiomnial">"It was glorius and i could
                  <br>
                  not stop to say wohoo for
                  <br>
                  every single moment
                  <br>
                  Dankeeeee"
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Ubud  
              </p>
            </div>
          </div>
          <!-- card 2 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial 
            text-center">
              <div class="testimonial-content">
                <img 
                src="{{ url('frontend/images/avatar-2.png')}}" width="120px" height="120px" 
                alt="user"
                class="mb-4 rounded-circle-1">
                <h3 class="mb-4">Angel</h3>
                <p class="testiomnial">"The trip was amazing and i 
                  <br>
                  saw something beautiful in 
                  <br>
                  that island that makes me 
                  <br>
                  want to learn more"
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Lombok
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial 
            text-center">
              <div class="testimonial-content">
                <img 
                src="{{ url('frontend/images/avatar-1.png')}}" 
                alt="user"
                class="mb-4 rounded-circle">
                <h3 class="mb-4">Idoy</h3>
                <p class="testiomnial">"I loved it when the waves
                  <br> 
                  was shaking harder -- i was 
                  <br> 
                  scared too"
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Lembang
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- buton getstart&help -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
          I Need Help
        </a>
        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
          Get Start
        </a>
      </div>
    </div>
      </main>

@endsection