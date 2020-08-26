@extends('/layouts/default', ['title' => 'About'])

@section('content')
    <div class="container">
        <br>
        <h2>What's Laracarte?</h2>
        <p>Laracart is clone of <a href="laramap.com" target="_blank">Laramap.com</a></p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    This app has been build by <a href="https://twitter.com/MvuhNazir">@MvuhNazir</a>
                    for learning purpose.</strong>
                </p>
            </div>
        </div>
        <p>feel free to help to improve the <a href="#">source code</a></p>

        <hr>

        <h2>What's Laramap?</h2>
        <p>Laramap is webside by which Laracart was inspierd :).</p>
        <p>More info <a href="https://laramap/p/about">here</a></p>

        <hr>

        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's build on laravel & bootstrap. But there's a bunch of services used for email and othrer sections. </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>

    </div>
@endsection
