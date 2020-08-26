<nav class=" navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('root_path') }}"><span> {{ config('app.name') }} </span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ set_active_route('root_path') }}">
                    <a class="nav-link" href="{{ route('root_path') }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active_route('about_path') }}" href="{{ route('about_path') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artisans</a>
                </li>
                <li class="nav-item {{ set_active_route('#') }} dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Planet
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                        <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                        <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                        <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
                        <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
                        <a class="dropdown-item" href="https://larachat.com">Larachat</a>
                    </div>
                </li>
                <li class="nav-item {{ set_active_route('#') }}">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item {{ set_active_route('#') }}">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item {{ set_active_route('#') }}">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
