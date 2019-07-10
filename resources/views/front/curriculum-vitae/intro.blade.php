<div id="home" class="intro route bg-image" style="background-image: url(curriculum/img/guayaquil.jpg)">
    <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
            <div class="container">
                <h1 class="intro-title mb-4">{{ $user->name }} {{ $user->lastname }}</h1>
                <p class="intro-subtitle">
                    <span class="text-slider-items">
                        {{ $user->career }},
                        {{ $user->faculty }},
                        {{ $user->university }},
                    </span>
                    <strong class="text-slider">
                        {{ $user->profession }}
                    </strong>
                </p>
                @if (env('APP_ENV') == 'local')
                    <p class="pt-3">
                        <a class="btn btn-primary btn js-scroll px-4" href="{{ 'cv-' . str_slug($user->name) . '-' . str_slug($user->lastname) . '.pdf' }}" target="_blank">
                            Ver curriculum vitae pdf
                        </a>
                    </p>
                @else
                    @if (file_exists(base_path('public_html/cv-' . str_slug($user->name) . '-' . str_slug($user->lastname) . '.pdf')))
                        <p class="pt-3">
                            <a class="btn btn-primary btn js-scroll px-4" href="{{ 'cv-' . str_slug($user->name) . '-' . str_slug($user->lastname) . '.pdf' }}" target="_blank">
                                Ver curriculum vitae pdf
                            </a>
                        </p>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>