<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>-->
    <style>
   p.clip {
    overflow: hidden; /* Обрезаем все, что не помещается в область */
    text-overflow: ellipsis; /* Добавляем многоточие */
    height: 100px;
   }
  </style>
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
                    
                    
                    @if($tasks->count()==0)
                    <p>no task to do</p>
                    @else
                    @foreach($tasks as $task)
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title"><a href="{{route('show',['id'=>$task->id])}}" formmethod="get">{{$task->head}}</a></h5>
                        <p>Опубликованно:{{$task->pub_date}}</p> 
                        </div>
                        <div class="card-body">
                            <div class="clip">
                            <p class="card-text"> {{$task->discription}}</p>

                            </div>
                        </div>
                    </div>
                    

                    
                    
                    @endforeach
                    @endif
                </div>
                <div class="col-md-8">{{ $tasks->links() }}</div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>
