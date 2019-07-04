<section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Skills
            </h3>
            {{-- <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p> --}}
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">



        @foreach ($skills as $s)
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-content">
                        <h2 class="s-title">{{ $s->title }}</h2>
                        {!! $s->description !!}
                    </div>
                </div>
            </div>
        @endforeach





      </div>
    </div>
  </section>

  <div class="section-counter paralax-mf bg-image" style="background-image: url(curriculum/img/oriente.JPG)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">

        <div class="col-sm-6 col-lg-6">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">{{ (int)date('Y')-2016 }}</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-pulse"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">{{ (int)date('Y')-1993 }}</p>
              <span class="counter-text">YEARS OLD</span>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>