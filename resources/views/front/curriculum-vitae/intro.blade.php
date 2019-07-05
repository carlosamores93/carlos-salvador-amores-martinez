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
            </div>
        </div>
    </div>
</div>