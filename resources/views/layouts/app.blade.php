<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    #cke_article-ckeditor{
      width: 100%;
    }
    .card-img-top{
      width: 351px !important;
    }
    .card-img{
      height: auto;
      width: 100%;
    }
    </style>
</head>
<body>

        @include('inc.nav')
       <div class="mx-md-4 mb-4 px-md-4 pb-4" id="app">
           
            @include('inc.message')
          <main class="">
            @yield('content')
         </main>
        </div>

    
</body>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="https://kit.fontawesome.com/dd4ddc9a8f.js" crossorigin="anonymous"></script>


</html>
