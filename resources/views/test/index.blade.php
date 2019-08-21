@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Публикация статей</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    Добро пожаловать в тестовый блог
                    </div>
                    <div class="my-3">
                    <a href="{{route('test.create')}}" class="btn btn-outline-primary">Новая Статья</a>
                    </div>
                    @if($tasks->count()==0)
                    <p>no task to do</p>
                    @else
                    @foreach($tasks as $task)
                    <div class="card">
                        <div class="card-header">
                        <p>Опубликованно:{{$task->pub_date}}</p> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$task->head}}</h5>
                            <p class="card-text"> {{$task->discription}}</p>

                            <div>
                            
                            <form action="{{route('test.destroy',$task->id)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE" />
                            {{ csrf_field() }}
                            <button class="btn btn-outline-primary" formaction="{{route('test.edit',$task->id)}}" formmethod="get" >Edit</button>
                            <input type="submit"  value="Delete" name="Delete" id="btnExc" 
                            class="btn btn-outline-danger" accesskey="x"/>
                            </form>
                            <div class="mt-3"><p class="font-weight-bold">Комментарии</p></div>
                            <div class="my-1">
                            <ul class="list-group">
                            @foreach($coms as $com)
                                @if($com->id_st==$task->id)

                                
                                    <li class="list-group-item">
                                    
                                    {{$com->u_name}}:
                                    {{$com->u_coment}}</li> 
                                    
                            
                                    
                                @endif
                            @endforeach
                            </ul>
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
@endsection
