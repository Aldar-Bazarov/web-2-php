<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Новости науки</title>
    <link rel="stylesheet" href="stylesheets/foundation.min.css">
    <link rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="stylesheets/app.css">
    <script src="javascripts/modernizr.foundation.js"></script>
    <link rel="stylesheet" href="fonts/ligature.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic'
        rel='stylesheet' type='text/css' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    @include('main-menu', ['rubrics' => $rubrics])
    <!-- ######################## Header (featured posts) ######################## -->
    <header>
        <div class="row">
            <h1>Новости науки</h1>
    </header>
    <!-- ######################## Section ######################## -->
    <section>
        <div class="section_main">
            <div class="row">
                @include('statyas-list', ['statyas' => $statyas])
                @include('admin-panel', ['isAdmin' => $isAdmin])
            </div>
        </div>
    </section>
    @include('images')
    @include('footer')
    <!-- ######################## Scripts ######################## -->
    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script>
    <!-- Initialize JS Plugins -->
    <script src="javascripts/app.js" type="text/javascript"></script>
</body>

</html>