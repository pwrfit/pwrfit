<link rel="stylesheet" href="{{ asset('css/videos.css')}}">
<div class="categories">
    <header class="header">
        <form class="search-bar">
            <input class="search-input" type="search" placeholder="Buscar" />
            <button type="submit" class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
        @if (Auth::user()->rol_id == 2)
            <div class="menu-icons">
                <a href="{{ route('upload') }}">
                    <img src="{{ asset('img/cloud-arrow-up-solid.svg') }}" style="width: 40px;" alt="Upload Video" />
                </a>
            </div>
        @endif
    </header>
    <section class="category-section">
        <button class="category active">Todo</button>
        <button class="category">Gluteos</button>
        <button class="category">Abdominales</button>
        <button class="category">Calentamiento</button>
        <button class="category">Espalda</button>
        <button class="category">Cardio</button>
        <button class="category">Piernas</button>
        <button class="category">Fuerza</button>
        <button class="category">Resistencia</button>
    </section>
    <div class="videos">
        <section class="video-section">
            @foreach ($subidos as $video)
            <article class="video-container">
                <a href="{{ route('videos.subidos.view', $video->id) }}" class="thumbnail" data-duration="{{ $video->duracion }}">
                    <img class="thumbnail-image" src="{{ asset('videos/miniaturas').'/'.$video->miniaturasrc }}" />
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <img class="channel-icon" src="{{ asset('avatares').'/'.$video->usuario->avatar }}" />
                    </a>
                    <div class="video-details">
                        <a href="{{ route('videos.subidos.view', $video->id) }}" class="video-title">{{ $video->titulo  }}</a>
                        <a href="#" class="video-channel-name">{{ $video->usuario->nombre }}</a>
                        <div class="video-metadata">
                            <span>
                                <i class="fa-solid fa-calendar-alt"></i> &nbsp;
                                {{ Str::ucfirst(Carbon\Carbon::parse($video->created_at)->diffForHumans()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
    </div>
</div>
