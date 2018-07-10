<div class="container">

    @if($pages)

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Имя</th>
                <th>Ссылка</th>
                <th>Title</th>
                <th>description</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>

            @foreach($pages as $k => $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{!! Html::link(route('pagesEdit', ['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
                    <td>{{ $page->link}}</td>
                    <td>{{ $page->title}}</td>
                    <td>{{ $page->description}}</td>
                    <td>
                        {!! Form::open(['url'=>route('pagesEdit', ['page'=>$page->id]), 'class'=> 'form-horizontal', 'method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif
    {!! Html::link(route('pagesAdd'),'Создать новую страницу', ['class' => 'btn btn-primary'] ) !!}

</div>