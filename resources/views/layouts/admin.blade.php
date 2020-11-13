<!DOCTYPE html>
<html lang ="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>@yield('title')</title>
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js')}}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <!-- 画面上部ナビバー　-->
            <nav class="navar navar-expand-md navar-dark navar-laravrl">
                <div class="container">
                    <a class="navar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportdContent" aria-controls="navbarSupportdContent"　aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                    
                    <div class="collapse navbar-collapse" id="navbarSupportdContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        
                        <!-- Right Side of Navbar -->
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ここまでナビバー -->
            
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>