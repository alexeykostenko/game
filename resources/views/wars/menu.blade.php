<nav class="navbar navbar-light p-4 px-md-4 mb-4 bg-white border-bottom box-shadow">
  <h1 class="navbar-brand">@yield('title', env('APP_NAME')) <small class="subtitle">@yield('description', env('APP_DESCRIPTION'))</small></h1>
    @section('buttons')
        <a class="btn btn-outline-primary" href="{{ route('play') }}">Play!</a>
    @show
</nav>
