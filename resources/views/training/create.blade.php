<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | New Training</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="my-5" style="background: #3c185b;">
    <div id="app my-5">
        <main class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="text-center my-5">
                            <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1592465124/logo_iyyhfa.png" width="240" height="80" alt="" loading="lazy">
                        </div>
                        @if(session()->has('danger'))
                            <div class="alert alert-danger">{{ session()->get('danger') }}</div>
                        @endif
                        <div class="card shadow-lg">
                            <div class="card-body py-4">
                                {!! Form::open(['route' => 'training.store', 'method' => 'POST', 'files' => 'true',]) !!}
                                    <div class="row">
                                        <div class="col md-6 mb-3">
                                            {{ Form::text('name', '', $attributes = ['required' => "", 'placeholder' => "Training Name", 'class' => "form-control",]) }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            {{ Form::number('price', '', $attributes = ['required' => "", 'placeholder' => "Price", 'class' => "form-control",]) }}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            {{ Form::textarea('description', '', $attributes = ['required' => "", 'placeholder' => "Enter Short Description Here.....", 'id' => "wysiwyg", 'class' => "form-control",]) }}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            {{ Form::file('cover_image', $attributes = ['required' => "", 'class' => "form-control",]) }}
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            {{ Form::submit('Post', $attributes = ['class' => "btn btn-primary form-control", 'style' => "background-color: #3c185b; border: none;",]) }}
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('wysiwyg');
    </script>
</body>
</html>
