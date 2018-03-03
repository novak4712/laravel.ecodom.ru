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
        <a class="menu__links-item menu__links-item-active" href="#">Главная</a>
        <a class="menu__links-item" href="gk.html">Гибкий камень</a>
        <a class="menu__links-item" href="tp.html">Термопанели</a>
        <a class="menu__links-item" href="gallery.html">Фотогалерея</a>
        <a class="menu__links-item" href="#contact_footer">Контакты</a>
    </div>
</nav>
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