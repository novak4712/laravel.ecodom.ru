<div class="wrapper container">
    {!! Form::open(['url' => route('advantageAdd'), 'class' => 'form-horizontal', 'method' => 'POST']) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('name', 'Заголовок:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Введите заголовок преимущества']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('text', 'Текст:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::textarea('text', old('text'), ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Введите текст']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-12">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
</div>