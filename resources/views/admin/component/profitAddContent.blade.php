<div class="wrapper container">
    {!! Form::open(['url' => route('profitAdd'), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('text', 'Текст:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('text', old('text'), ['class' => 'form-control', 'placeholder' => 'Введите текст профита']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('icon', 'Иконка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::file('icon') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-12">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}
</div>