<div class="container">

    @if($sliders)

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

            @foreach($sliders as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->image}}</td>
                    <td>{!! Html::link(route('sliderEdit', ['sliders'=>$k->id]),$k->title,['alt'=>$k->title]) !!}</td>
                    <td>{!! Html::link(route('sliderEdit', ['sliders'=>$k->id]),$k->alt,['alt'=>$k->alt]) !!}</td>

                    <td>
                        {!! Form::open(['url'=>route('sliderEdit', ['sliders'=>$k->id]), 'class'=> 'form-horizontal', 'method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

    {!! Html::link(route('sliderAdd'),'Создать новый слайд', ['class' => 'btn btn-primary'] ) !!}

</div>