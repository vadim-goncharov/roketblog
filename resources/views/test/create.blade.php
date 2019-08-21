@extends('layouts.app')

@section('title','Создание задачи')

    @section('content')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                        Создание
                        </div>

                        <div class="card-body">

                        {!! Form::open(['route'=>'test.store','method'=>'POST']) !!}

                        @component('components.form')
                        @endcomponent

                        {!! Form::close() !!}
    
                        </div>
                    </div>
                </div>
            </div>

        </div>
    
@endsection