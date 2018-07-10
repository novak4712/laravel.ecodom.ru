<div class="wrapper container">
    {!! Form::open(['url' => route('fieldAdd'), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('logo', 'Картинка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::file('logo') !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('email', 'Email:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Введите email']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('phone1', 'Левый телефон:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('phone1', old('phone1'), ['class' => 'form-control', 'placeholder' => 'Введите телефон']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('phone2', 'Правый телефон:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('phone2', old('phone2'), ['class' => 'form-control', 'placeholder' => 'Введите телефон']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('address', 'Адрес:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Введите адрес']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('description', 'Текст:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::textarea('description', old('description'), ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Введите текст']) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-12">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor' );
    </script>
</div>