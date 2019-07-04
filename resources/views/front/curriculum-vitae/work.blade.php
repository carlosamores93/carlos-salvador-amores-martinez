 <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Works
            </h3>
            {{-- <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p> --}}
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

        @foreach ($works as $w)
            <div class="col-md-4">
                <div class="work-box">
                    <div class="work-img">
                        <img src="{{ asset('img/' . $w->slug .'.jpg') }}" alt="{{ $w->company }}" title="{{ $w->company }}" class="img-fluid">
                    </div>
                    <div class="work-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="w-title">{{ $w->job }}</h2>
                                <div class="w-more">

                                    {!! $w->description !!}
                                    {{-- <span class="w-ctegory">Beca de 2 meses en el departamento de sistemas y control de calidad. Apoyo en la producción de contenidos replicando modelos existentes.</span> / <span class="w-date">2015</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->
