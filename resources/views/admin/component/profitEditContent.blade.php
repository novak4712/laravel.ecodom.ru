<div class="wrapper container">
    {!! Form::open(['url' => route('profitEdit', array('profit' => $data['id'])), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype'=>'multipart/form-data' ]) !!}

    <div class="form-group row align-items-center">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('text', 'Текст:', ['class' => 'col-1 control-label']) !!}
        <div class="col-11">
            {!! Form::text('text', $data['text'], ['class' => 'form-control', 'placeholder' => 'Введите текст профита']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center">
        {!! Form::label('old_icon', 'Иконка:', ['class' => 'col-2 control-label']) !!}
        <div class="col-10">
            {!! Html::image('app/img/'.$data['icon'], '' ,['class' => 'img-thumbnail', 'style' => 'width: 200px;']) !!}
            {!! Form::hidden('old_icon', $data['icon']) !!}
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