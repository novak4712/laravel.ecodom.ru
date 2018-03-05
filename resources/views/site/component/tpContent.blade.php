<main>
    @if(isset($tp) && is_object($tp))

        <section class="cart container">
            <div class="items">

                @foreach($tp as $k)

                    <div class="item">
                        <div class="cart_header">
                            {!! Html::image('app/img/'.$k->image) !!}
                        </div>
                        <div class="cart_body">
                            <div class="cart_text">
                                <h6>
                                    {!! $k->name !!}
                                </h6>
                                <div>
                                    {!! $k->description !!}
                                </div>
                            </div>
                            <div class="cart_price">
                                <p> {!! $k->price !!} руб.</p>
                                {!! $k->units !!}
                                <button class="cart_toggle" rel="popup3">Заказать</button>
                            </div>
                        </div>

                    </div>

                @endforeach

            </div>
        </section>

    @endif

</main>