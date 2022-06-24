<div class="categories">
    <header class="header">
        <form class="search-bar">
          <input class="search-input" type="search" placeholder="Buscar" />
          <button type="submit" class="search-btn">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
        <div class="menu-icons">
          <a href="#">
            <img src="{{ asset('img/cloud-arrow-up-solid.svg')}}" style="width: 40px;" alt="Upload Video" />
          </a>
        </div>
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
            <article class="video-container">
                <a href="#" class="thumbnail" data-duration="00:00">
                    <img class="thumbnail-image" src="{{ asset('img/op.jpg') }}" />
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <img class="channel-icon" src="{{ asset('img/zoro.jpg') }}" />
                    </a>
                    <div class="video-details">
                        <a href="#" class="video-title">One Piece</a>
                        <a href="#" class="video-channel-name">Toei Animation</a>
                        <div class="video-metadata">
                            <span>10K views</span>
                            •
                            <span>hace 10 horas</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="video-container">
                <a href="#" class="thumbnail" data-duration="00:00">
                    <img class="thumbnail-image" src="{{ asset('img/th.jpg') }}" />
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <img class="channel-icon" src="{{ asset('img/tms-entertainment-logo.jpg') }}" />
                    </a>
                    <div class="video-details">
                        <a href="#" class="video-title">Toaru Hikūshi e no Koiuta</a>
                        <a href="#" class="video-channel-name">TMS Entertainment</a>
                        <div class="video-metadata">
                            <span>20K views</span>
                            •
                            <span>hace 1 dia</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="video-container">
                <a href="#" class="thumbnail" data-duration="00:00">
                    <img class="thumbnail-image" src="{{ asset('img/bnh.jpg') }}" />
                </a>
                <div class="video-bottom-section">
                    <a href="#">
                        <img class="channel-icon" src="{{ asset('img/boku.jpg') }}" />
                    </a>
                    <div class="video-details">
                        <a href="#" class="video-title">Boku no Hero</a>
                        <a href="#" class="video-channel-name">Studio Bones</a>
                        <div class="video-metadata">
                            <span>15K views</span>
                            •
                            <span>hace 2 dias</span>
                        </div>
                    </div>
                </div>
            </article>

    </div>
</div>
