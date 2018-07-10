<div class="container">

    @if($fotos)

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Картинка</th>
                <th>Title</th>
                <th>Alt</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>

            @foreach($fotos as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->image}}</td>
                    <td>{!! Html::link(route('fotoEdit', ['fotos'=>$k->id]),$k->title,['alt'=>$k->title]) !!}</td>
                    <td>{!! Html::link(route('fotoEdit', ['fotos'=>$k->id]),$k->alt,['alt'=>$k->alt]) !!}</td>

                    <td>
                        {!! Form::open(['url'=>route('fotoEdit', ['fotos'=>$k->id]), 'class'=> 'form-horizontal', 'method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

    {!! Html::link(route('fotoAdd'),'Создать новый фото слайд', ['class' => 'btn btn-primary'] ) !!}

</div>