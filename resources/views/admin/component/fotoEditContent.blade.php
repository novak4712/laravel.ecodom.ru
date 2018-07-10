<div class="wrapper container">
    {!! Form::open(['url' => route('fotoEdit', array('foto' => $data['id'])), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype'=>'multipart/form-data' ]) !!}

    <div class="form-group row align-items-center">
        {!! Form::label('old_image', 'Картинка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Html::image('app/img/'.$data['image'], '' ,['class' => 'img-thumbnail', 'style' => 'width: 200px;']) !!}
            {!! Form::hidden('old_image', $data['image']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('image', 'Картинка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Form::file('image') !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('title', 'Title:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('title', $data['title'], ['class' => 'form-control', 'placeholder' => 'Введите текст title']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('alt', 'Alt:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('alt', $data['alt'], ['class' => 'form-control', 'placeholder' => 'Введите текст alt']) !!}
        </div>
    </div>



    <div class="form-group">
        <div class="col-12">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}
</div>