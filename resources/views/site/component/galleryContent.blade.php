<main>
    @if(isset($fotos) && is_object($fotos))
        <section class="container gallery">
            <div class="items">
                @foreach($fotos as $img)
                    <div class="item">
                        <img src="{{ asset('app/img/'.$img->image) }}" alt="{!! $img->alt !!}" title="{!! $img->title !!}" class="img_toggle" rel="popup4">
                    </div>
                @endforeach

            </div>
        </section>
        <section class="full_image" id="popup4">
            <div class="item owl-carousel">
                <img src="{{ asset('app/img/gal_max_1.jpg') }}" alt="image" id="max_img">
            </div>
        </section>
    @endif
</main>
