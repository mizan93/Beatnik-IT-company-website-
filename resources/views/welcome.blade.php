@extends('app')
@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">

        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Technology Solutions<br>for Your <span>Business!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            @foreach ($about as $about)
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ url('storage/about-us/'.$about->image) }}" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
              <h2>About Us</h2>

              <h3>{!! $about->title !!}</h3>
              <p>{!! $about->description !!}</p>
              @endforeach
            <ul>
                @foreach ($services as $service)
                <li><i class="ion-android-checkmark-circle"></i> {{ $service->name }}</li>

                @endforeach


              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Services</h3>
          <p>As The Leading Communications Development & Advertising Agency In Dhaka, Beatnik Technology Limited Delivers:</p>
        </header>

        <div class="row">
            @foreach ($services as $service)
                  <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">{{ $service->name }}</a></h4>
              <p class="description">{!!  $service->details  !!}</p>
            </div>
          </div>
            @endforeach

        </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid" data-aos="fade-up">
 @foreach ($experiance as $experiance)


        <header class="section-header">
          <h3>{{ $experiance->title }}</h3>
<p>{!! $experiance->desc1 !!}</</p>
     </header>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="why-us-img">
              <img src="{{ url('storage/experiance/'.$experiance->image) }}" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>
{!!$experiance->desc2!!}              </p>

              <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>One Stop Destination</h4>
                <p>We are one stop destination for all kind of web development services and marketing solutions.</p>
              </div>

              <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Expertise & Specialization</h4>
                <p>We are experts and specializes in application development, website design, digital marketing, E-commerce services, SEO, content management and marketing.</p>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{ $experiance->client }}</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{ $experiance->project }}</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{ $experiance->support }}</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{ $experiance->worker }}</span>
            <p>Hard Workers</p>
          </div>

        </div>
        @endforeach
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Get a quote now</h3>
            <p class="cta-text"> Contact us today and discuss, how we can develop a mutually beneficial and long term relationship!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Get a quote now</a>
          </div>
        </div>

      </div>
    </section><!--  End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($categories as $cat)
              <li data-filter=".{{ $cat->slug }}">{{ $cat->name }}</li>

              @endforeach

            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($portfolio as $portfolio)
              <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->category->slug }}">
            <div class="portfolio-wrap">
                @php
                $i=1;
            @endphp
            @foreach ($portfolio->imgs as $image)
            @if ($i>0)
            <img src="{{ url('storage/portfolio/'.$image->image) }}" class="img-fluid" alt="">

            @endif
            @php
                $i--;
            @endphp
            @endforeach
              <div class="portfolio-info">
                <h4><a href="{{ route('details',$portfolio->id) }}">{{ $portfolio->category->name }}</a></h4>
                <p>{{ $portfolio->category->name }}</p>
                <div>
                    @php
                    $i=1;
                @endphp
                @foreach ($portfolio->imgs as $image)
                @if ($i>0)
                    <a href="{{ url('storage/portfolio/'.$image->image) }}" data-gall="portfolioGallery" title="{{ $portfolio->category->name }}" class="link-preview venobox"><i class="ion ion-eye"></i></a>

                    @endif
                    @php
                        $i--;
                    @endphp
                    @endforeach
                  <a href="{{ route('details',$portfolio->id) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
            @endforeach
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
        </header>
        <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">

          @foreach ($question_ans as $qa)
               <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">{{ $qa->question }}
 <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                {!! $qa->ans !!}              </p>
            </div>
          </li>

          @endforeach


        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->

@endsection
