<div class="container">

    @if($profit)

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Текст</th>
                <th>Иконка</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>

            @foreach($profit as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{!! Html::link(route('profitEdit', ['profit'=>$k->id]),$k->text,['alt'=>$k->text]) !!}</td>
                    <td>{{ $k->icon}}</td>
                    <td>
                        {!! Form::open(['url'=>route('profitEdit', ['profit'=>$k->id]), 'class'=> 'form-horizontal', 'method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

    {!! Html::link(route('profitAdd'),'Создать новый профит', ['class' => 'btn btn-primary'] ) !!}

</div>