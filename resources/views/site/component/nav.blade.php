<header id="index">
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
</header>