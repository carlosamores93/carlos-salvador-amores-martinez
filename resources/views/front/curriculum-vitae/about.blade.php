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
                                        <img src="{{ asset('img/'. str_slug($user->name) . '-' . str_slug($user->lastname) . '.jpg') }}" class="img-fluid rounded b-shadow-a" alt="{{ $user->name }} {{ $user->lastname }}" title="{{ $user->name }} {{ $user->lastname }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Nombre: </span> <span>{{ $user->name }} {{ $user->lastname }}</span></p>
                                        <p><span class="title-s">Puesto: </span> <span>{{ $user->profession }}</span></p>
                                        <p><span class="title-s">Email: </span> <span> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a> </span></p>
                                        <p><span class="title-s">Teléfono: </span> <span><a href="tel:{{ $user->phone }}">{{ $user->phone }}</a></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">
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
                                    <h5 class="title-left">Sobre mi</h5>
                                </div>
                                    {!! $user->description !!}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>