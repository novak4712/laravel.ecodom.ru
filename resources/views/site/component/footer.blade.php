<footer id="contact_footer">
    @if(isset($fields) && is_object($fields))
        <div class="cooperation">
            {!! $fields['description'] !!}
        </div>
        <div class="cont_email">
            <div class="email">{!! $fields['email'] !!}</div>
        </div>
        <div class="telefon">
            <p>{!! $fields['phone1'] !!}</p>
            <div class="line"></div>
            <p>{!! $fields['phone2'] !!}</p>
            <p class="adress">{!! $fields['address'] !!}</p>
        </div>
    @endif
</footer>