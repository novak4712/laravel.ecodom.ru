<main>
    @if(isset($gk) && is_object($gk))

        <section class="cart container">
            <div class="items">

                @foreach($gk as $k)

                    <div class="item">
                        <div class="cart_header">
                            {!! Html::image('app/img/'.$k->image) !!}
                        </div>
                        <div class="cart_body">
                            <div class="cart_text">
                                <h6>
                                    {!! $k->name !!}
                                </h6>
                                <p>
                                    {!! $k->description !!}
                                </p>
                            </div>
                            <div class="cart_price">
                                <p> {!! $k->price !!} руб.</p>
                                {!! $k->units !!}
                                <button class="cart_toggle" rel="popup2">Заказать</button>
                            </div>
                        </div>

                    </div>

                @endforeach

            </div>
        </section>

    @endif
</main>

