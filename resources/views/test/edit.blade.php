@extends('layouts.app')

    @section('title','Edit Task')

        @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                        Редактирование
                        </div>

                        <div class="card-body">

                        {!! Form::model($task,['route'=>['test.update',$task->id],'method'=>'PUT']) !!}

                        @component('components.form')
                        @endcomponent 

                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
 @endsection