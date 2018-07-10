<div class="container">

    @if($fields)

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Картинка</th>
                <th>Email</th>
                <th>Левый телефон</th>
                <th>Правый телефон</th>
                <th>Адрес</th>
                <th>Текст</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>

            @foreach($fields as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->logo}}</td>
                    <td>{!! Html::link(route('fieldEdit', ['field'=>$k->id]),$k->email,['email'=>$k->email]) !!}</td>
                    <td>{!! Html::link(route('fieldEdit', ['field'=>$k->id]),$k->phone1,['phone1'=>$k->phone1]) !!}</td>
                    <td>{!! Html::link(route('fieldEdit', ['field'=>$k->id]),$k->phone2,['phone2'=>$k->phone2]) !!}</td>
                    <td>{!! Html::link(route('fieldEdit', ['field'=>$k->id]),$k->address,['address'=>$k->address]) !!}</td>
                    <td>{!! Html::link(route('fieldEdit', ['field'=>$k->id]),$k->description,['description'=>$k->description]) !!}</td>

                    <td>
                        {!! Form::open(['url'=>route('fieldEdit', ['field'=>$k->id]), 'class'=> 'form-horizontal', 'method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

    {!! Html::link(route('fieldAdd'),'Создать новый контакт', ['class' => 'btn btn-primary'] ) !!}

</div>