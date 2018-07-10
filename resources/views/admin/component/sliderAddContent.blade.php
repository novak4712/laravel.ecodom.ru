<div class="wrapper container">
    {!! Form::open(['url' => route('sliderAdd'), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('image', 'Картинка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::file('image') !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('title', 'Title:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Введите текст title']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('alt', 'Alt:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('alt', old('alt'), ['class' => 'form-control', 'placeholder' => 'Введите текст alt']) !!}
        </div>
    </div>



    <div class="form-group">
        <div class="col-12">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}
</div>