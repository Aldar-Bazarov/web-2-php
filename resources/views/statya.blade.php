<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Новости науки</title>
    <link rel="stylesheet" href="{{ asset('stylesheets/foundation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/main.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ligature.css') }}">
    <script src="{{ asset('javascripts/foundation.min.js') }}" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic'
        rel='stylesheet' type='text/css' />
</head>

<body>
    @include('main-menu', ['rubrics' => $rubrics])
    <!-- ######################## Header ######################## -->
    <header>
        <div class="row">
            <a href="/rubric/{{ $rubric->id }}">
                <h4>{{$rubric->rubric_name}}</h4>
            </a>
            <article>
                <div class="twelve columns">
                    <h1>{{$statya->title}}</h1>
                    <p class="excerpt">
                        {{$statya->lid}}
                    </p>
                </div>
            </article>
        </div>
    </header>
    <!-- ######################## Section ######################## -->
    <section class="section_light">
        <div class="row">
            <p> <img src="{{ asset('storage/images/' . $statya->image) }}" alt="desc" width=400 align=left hspace=30>
                {{$statya->content}}
            </p>
        </div>
    </section>
    @include('footer')
    <!-- ######################## Scripts ######################## -->
    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script>
    <!-- Initialize JS Plugins -->
    <script src="javascripts/app.js" type="text/javascript"></script>
</body>

</html>