<section class="messages">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</section>
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
                <a class="menu__links-item" href="{{ route('index') }}">Главная</a>
                @foreach($menu as $item)

                    <a class="menu__links-item" href="{{ $item['link'] }}">{{ $item['title'] }}</a>

                @endforeach

            </div>
        </nav>

    @endif
        <section class="messages">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
</header>