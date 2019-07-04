<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      {{-- <img src="{{ asset('curriculum/img/testimonial-4.jpg') }}" class="img-fluid rounded b-shadow-a" alt=""> --}}
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Nombre: </span> <span>Carlos Amores</span></p>
                      <p><span class="title-s">Puesto: </span> <span>Programador backend</span></p>
                      <p><span class="title-s">Email: </span> <span> <a href="mailto:amorescarlos93@hotmail.com">amorescarlos93@hotmail.com</a> </span></p>
                      <p><span class="title-s">Teléfono: </span> <span>(+34) 628 60 60 93</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                    {{-- <p class="title-s">Skills</p> --}}
                    @foreach ($miniskills as $ms)
                        <span>{{ $ms->title }}</span> <span class="pull-right">{{ $ms->progress }}%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ $ms->progress }}%;" aria-valuenow="{{ $ms->progress }}" aria-valuemin="0"
                          aria-valuemax="100"></div>
                        </div>
                    @endforeach
                </div>
              </div>

              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    <span class="title-s">Primaria:</span> de 3º a 6º en el Colegio Dulce Nombre de Jesús, barrio Salamanca, Madrid.
                  </p>
                  <p class="lead">
                    <span class="title-s">Educación Secundaria Obligatoria:</span> de 1º a 4º ESO en el IES Carlos Mª Rodriguez de Valcárcel , barrio Moratalaz, Madrid.
                  </p>
                  <p class="lead">
                    <span class="title-s">Bachillerato</span> de 1º a 2º en el IES Felipe II , barrio Moratalaz, Madrid.
                  </p>
                  <p class="lead">
                    <span class="title-s">Grado Ing Computadores:</span> en la Facultad de Infórmatica, Universidad Complutense de Madrid.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>