@extends("layouts.app")
{{--@section("content")--}}
@extends('admin-panel')
    <main role="main">
    <section class="row-">
        <h2 style="text-align: center; padding-top: 0.5em;">Нова рецепта</h2>

        {!! Form::open(['action' => 'RecipesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group-custom col">
            {{Form::label('title','Заглавие')}}
            {{Form::text('title', '',['placeholder' => 'Заглавие на рецептата' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('preptime','Време за подготовка')}}
            {{Form::text('preptime', '',['placeholder' => 'Приблизително време за подготовка на ястието.' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('image','Изображение')}}
{{--            {{Form::file('image', '')}}--}}
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group-custom col">
            {{Form::label('description','Описание')}}
            {{Form::textarea('description', '',['placeholder' => 'Кратко описание на рецептата.' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('ingredients','Съставки')}}
            {{Form::textarea('ingredients', '',['placeholder' => 'Необходимите съставки' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('preparation','Приготвяне')}}
            {{Form::textarea('preparation', '',['placeholder' => 'Детайлно описание на целия процес по приготвянето на ястието.' ])}}
        </div>
        <div class="form-group2 col" style="margin-top: 1em;">
{{--            {{Form::submit('Add Recipe', '')}}--}}
            <button type="submit" class="btn btn-primary" style="background: #1eb6a7">Добавяне на рецепта</button>
        </div>
        {!! Form::close() !!}

    </section>
    </main>
{{--@endsection--}}
