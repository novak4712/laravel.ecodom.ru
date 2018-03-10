<div class="container">

    @if($tp)

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Нзвание</th>
                <th>Картинка</th>
                <th>Описание</th>
                <th>цена</th>
                <th>еденицы измерения</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>

            @foreach($tp as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{!! Html::link(route('tpEdit', ['tp'=>$k->id]),$k->name,['alt'=>$k->name]) !!}</td>
                    <td>{{ $k->image}}</td>
                    <td>{{ $k->description}}</td>
                    <td>{{ $k->price}}</td>
                    <td>{{ $k->units}}</td>
                    <td>
                        {!! Form::open(['url'=>route('tpEdit', ['tp'=>$k->id]), 'class'=> 'form-horizontal', 'method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

    {!! Html::link(route('tpAdd'),'Создать новую карточку', ['class' => 'btn btn-primary'] ) !!}

</div>