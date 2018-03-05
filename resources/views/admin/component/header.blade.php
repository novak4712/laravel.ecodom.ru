<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="#">
        <img src="{{ asset('app/img/admin-254x300.png') }}" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('pages') }}">Страницы</a>
            <a class="nav-item nav-link" href="{{ route('profit') }}">Профит</a>
            <a class="nav-item nav-link" href="{{ route('advantage') }}">Преимущества</a>
            <a class="nav-item nav-link" href="{{ route('gk') }}">Гибкий камень</a>
            <a class="nav-item nav-link" href="{{ route('tp') }}">Термопанели</a>
        </div>
    </div>
</nav>
<div class="container">
    <h2 class="admin_title">{{ $title }}</h2>
</div>