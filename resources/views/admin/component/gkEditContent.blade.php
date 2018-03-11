<div class="wrapper container">

    {!! Form::open(['url' => route('gkEdit', array('gk' => $data['id'])), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype'=>'multipart/form-data' ]) !!}

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('name', 'Название:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('name',  $data['name'], ['class' => 'form-control', 'placeholder' => 'Введите название гибкого камня']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('old_image', 'Изображение:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Html::image('app/img/'.$data['image'], '' ,['class' => 'img-thumbnail', 'style' => 'width: 200px;']) !!}
            {!! Form::hidden('old_image', $data['image']) !!}
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
            {!! Form::textarea('description', $data['description'], ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Введите описание']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('price', 'Цена:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::number('price', $data['price'], ['class' => 'form-control', 'placeholder' => 'Введите цену гибкого камня']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('units', 'Еденицы имерения:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::text('units', $data['units'], ['class' => 'form-control', 'placeholder' => 'Введите еденицы измерения']) !!}
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