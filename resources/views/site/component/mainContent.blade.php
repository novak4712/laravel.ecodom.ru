<main>
    @if(isset($profit) && is_object($profit))

        <section class="profit">
            <div class="container">
                <div class="items">
                    <h2>Почему выбирают именно нас</h2>

                    @foreach($profit as $k)

                        <div class="item">
                            {!! Html::image('app/img/'.$k->icon) !!}
                            {!! $k->text !!}
                        </div>

                    @endforeach

                </div>
            </div>
        </section>

    @endif

    <section class="slider">
        <h3>Наша продукция</h3>
        <div class="slider_container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('app/img/productslide1.jpg') }}"/>
                        <p class="flex-caption">Гибкий кирпич</p>
                    </li>
                    <li>
                        <img src="{{ asset('app/img/productslide2.jpg') }}"/>
                        <p class="flex-caption">Гибкие обои</p>
                    </li>
                    <li>
                        <img src="{{ asset('app/img/productslide3.jpg') }}"/>
                        <p class="flex-caption">Гибкий камень: Плитка</p>
                    </li>
                    <li>
                        <img src="{{ asset('app/img/productslide4.jpg') }}"/>
                        <p class="flex-caption">Гибкий камень: Текстурированный</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    @if(isset($advantage) && is_object($advantage))

        <section class="advantage">
            <div class="container">
                <h3>Преимущества перед другими материалами</h3>
                <div class="items">
                    @foreach($advantage as $k)
                        <div class="item img_item{{$k->id}}">
                            <div class="img_{{$k->id}}"></div>
                            <div class="item_header">
                                {!! $k->name !!}
                                <button class="read_more but{{$k->id}}">Подробнее</button>
                            </div>
                            <div class="item_text text{{$k->id}}">
                                {!! $k->text !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    @endif

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62012.60396116427!2d76.44290987574828!3d60.94101270400136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x436d3ea933d05687%3A0xd611216bd7fa542d!2z0J3QuNC20L3QtdCy0LDRgNGC0L7QstGB0LosINCl0LDQvdGC0Yst0JzQsNC90YHQuNC50YHQutC40Lkg0LDQstGC0L7QvdC-0LzQvdGL0Lkg0L7QutGA0YPQsywg0KDQvtGB0YHQuNGP!5e0!3m2!1sru!2sby!4v1518263924692"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
</main>