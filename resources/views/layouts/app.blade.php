<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/images/bee.png')}}">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Beeng</title>
</head>
<body>
    <div id="app">
        @include('layouts.header')

        <main class="">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
        
        var options = {
                  filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                  filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                  filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                  filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                };
                ClassicEditor
                                  .create( document.querySelector( '#editor' ) )
                                  .then( editor => {
                                          console.log( editor );
                                  } )
                                  .catch( error => {
                                          console.error( error );
                                  } );
      </script>
</body>
</html>
