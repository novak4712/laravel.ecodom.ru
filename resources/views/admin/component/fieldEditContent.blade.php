<div class="wrapper container">
    {!! Form::open(['url' => route('fieldEdit', array('field' => $data['id'])), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype'=>'multipart/form-data' ]) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('old_logo', 'Картинка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Html::image('app/img/'.$data['logo'], '' ,['class' => 'img-thumbnail', 'style' => 'width: 200px;']) !!}
            {!! Form::hidden('old_logo', $data['logo']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('logo', 'Картинка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::file('logo') !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('email', 'Email:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('email', $data['email'], ['class' => 'form-control', 'placeholder' => 'Введите текст email']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('phone1', 'Левый телефон:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('phone1', $data['phone1'], ['class' => 'form-control', 'placeholder' => 'Введите телефон']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('phone2', 'Правый телефон:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('phone2', $data['phone2'], ['class' => 'form-control', 'placeholder' => 'Введите телефон']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('address', 'Адрес:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('address', $data['address'], ['class' => 'form-control', 'placeholder' => 'Введите адрес']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('description', 'Текст:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::textarea('description', $data['description'], ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Введите текст']) !!}
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