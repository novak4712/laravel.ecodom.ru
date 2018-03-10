<div class="wrapper container">
    {!! Form::open(['url' => route('pagesAdd'), 'class' => 'form-horizontal', 'method' => 'POST']) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('name', 'Название:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Введите название страницы']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('link', 'Ссылка:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => 'Введите ссылку']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-12">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}
</div>