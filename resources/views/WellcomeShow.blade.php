<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
    
            

            <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ROCKETBLOG') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/test') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    
                    
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title">{{$task->head}}</h5>
                        <p>Опубликованно:{{$task->pub_date}}</p> 
                        </div>
                        <div class="card-body">
                            <p class="card-text"> {{$task->discription}}</p>

                            
                        </div>
                    </div>
                    
                    <div class="card">
                    <script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                     if (window.ifpluso==undefined) { window.ifpluso = 1;
                     var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                    var h=d[g]('body')[0];
                    h.appendChild(s);
                    }})();</script>
                    <div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,moimir"></div>
                    </div>
                    <div>
                    

                    </div>
                    <form action="/addcom" method="post">
                    <div class="col mx-1">
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="text" class="form-control" name="u_name"id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" name="coment" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    <input type="hidden" name="id" value="{{$task->id}}">
                    <div class="row mx-1">
                    <button class="btn btn-outline-primary" type="submit">Сохранить</button>
                    {{ csrf_field() }}
                    </div>

                    </form>
                    
                    @foreach($coms as $com)
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title">{{$com->u_name}}</a></h5> 
                        </div>
                        <div class="card-body">
                            <p class="card-text"> {{$com->u_coment}}</p>

                            
                        </div>
                    </div>
                    @endforeach
                    
                
                
                    </div>
                    </div>
                    

                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>
