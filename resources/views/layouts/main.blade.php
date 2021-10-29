<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>DC Comics</title>
</head>
<body>
    @include('partials.header', ['links' => config('dc_links.list')])

    <main>
        @include('partials.jumbotron')

        @yield('content')

        
    </main>

    @include('partials.footer',['links' => config('dc_links'), 'shops' => config('dc_shops'), 'infos' => config('dc_infos'), 'sites' => config('dc_sites')])
</body>
</html>