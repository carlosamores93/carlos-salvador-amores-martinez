<!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Curriculum Vitae</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">Sobre mi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Habilidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Trabajos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contacto</a>
          </li>

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cms-home') }}"> CMS </a>
                </li>
            @endguest

          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ route('home') }}">HomePage</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->