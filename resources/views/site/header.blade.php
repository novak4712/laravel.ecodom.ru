@if(isset($menu))

    <nav class="menu">
        <div class="logo">
            <img src="{{ asset('app/img/logo3.png') }}" alt="логотип">
        </div>
        <div class="menu__icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="menu__links">
            @foreach($menu as $item)

            <a class="menu__links-item" href="{{ $item['link'] }}">{{ $item['title'] }}</a>

            @endforeach

        </div>
    </nav>

@endif

<section class="fullscreen-bg">
    <div class="overlay">
        <div class="container">
            <h1>Гибкий камень и термопанели</h1>
            <p>Готовое решение для дизайна интерьера</p>
            <p>и внешней отделки фасадов</p>
            <p class="text">Прокрутить вниз</p>
            <div class="arrow_top">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
            </div>

        </div>
    </div>
    <video loop muted autoplay poster="{{ asset('app/media/backvideo.jpg') }}" class="fullscreen-bg__video">
        <source src="{{ asset('app/media/backvideo.mp4') }}" type="video/mp4">
        <source src="{{ asset('app/media/backvideo.webm') }}" type="video/webm">
        <source src="{{ asset('app/media/backvideo.avi') }}" type="video/avi">
    </video>
</section>