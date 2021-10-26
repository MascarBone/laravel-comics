<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC Comics</title>
</head>
<body>
    @include('partials.header', ['links' => config('dc_comics_links')])

    <main>
        @include('partials.jumbotron')

        @yield('content')

        
    </main>

    @include('partials.footer',['links' => config('dc_comics_links'), 'nome' => 'Simone'])
</body>
</html>