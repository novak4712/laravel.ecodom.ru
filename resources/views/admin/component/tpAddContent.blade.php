<div class="wrapper container">

    {!! Form::open(['url' => route('tpAdd'), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('name', 'Название:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Введите название термопанели']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('image', 'Изображение:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::file('image') !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('description', 'Описание:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::textarea('description', old('description'), ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Введите описание']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('price', 'Цена:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::number('price', old('price'), ['class' => 'form-control', 'placeholder' => 'Введите цену термопанели']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('units', 'Еденицы имерения:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('units', old('units'), ['class' => 'form-control', 'placeholder' => 'Введите еденицы измерения']) !!}
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