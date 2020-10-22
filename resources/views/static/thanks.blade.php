<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Thanks</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container">
    <div id="app" class="my-5">
        <main class="py-5 my-5 row justify-content-center">
            <div class="card col-md-4 text-center my-4 shadow-lg">
                <div class="card-body my-4">
                    <img src="{{ asset('images/thanks.png') }}" width="100%">
                    <h1>For contacting us</h1>
                    <button class="btn btn-primary form-control" style="background: #3c185b; border: none;" onclick="window.location='{{ route('index') }}'">Back To Home</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
