
{{ Form::label('head','Заголовок', ['class' => 'control-label']) }}
{{ Form::text('head', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Task Name']) }}

{{ Form::label('discription', 'Статья', ['class' => 'control-label mt-3']) }}
{{ Form::textarea('discription', null, ['class' => 'form-control', 'placeholder' => 'Task Description']) }}

{{ Form::label('pub_date', 'Дата публикации', ['class' => 'control-label mt-3']) }}
{{ Form::date('pub_date', null, ['class' => 'form-control']) }}

<div class="row mt-3">
    <div class="row mx-3">
    <a href="{{route('test')}}" class="btn btn-outline-primary">Возврат</a>

    </div>
    <div class="row mx-1">

    <button class="btn btn-outline-primary" type="submit">Сохранить</button>

    </div>
</div>