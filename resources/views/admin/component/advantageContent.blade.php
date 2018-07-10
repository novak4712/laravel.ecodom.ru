<div class="wrapper container">

    @if($advantage)

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Заголовок</th>
                <th>Текст</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>

            @foreach($advantage as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{!! Html::link(route('advantageEdit', ['advantage'=>$k->id]),$k->name,['alt'=>$k->name]) !!}</td>
                    <td>{{ $k->text}}</td>
                    <td>
                        {!! Form::open(['url'=>route('advantageEdit', ['advantage'=>$k->id]), 'class'=> 'form-horizontal', 'method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

    {!! Html::link(route('advantageAdd'),'Создать новое преимущество', ['class' => 'btn btn-primary'] ) !!}


</div>