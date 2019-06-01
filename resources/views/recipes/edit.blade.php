@extends("layouts.app")
@section("content")

    <section class="edit">
        <h2>Редактиране на рецепта <span> {{$recipe->title}} </span></h2>
        {!! Form::open(['action' => ['RecipesController@update', $recipe->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group-custom">
            {{Form::label('title','Заглавие')}}
            {{Form::text('title',  $recipe->title ,['placeholder' => 'This is the recipe name' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('preptime','Време за подготовка')}}
            {{Form::text('preptime', $recipe->preptime ,['placeholder' => 'The time it would take for the whole recipe to be completed, doesnt have to be exact' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('image','Изображение')}}
            {{Form::file('image')}}
            {{Form::hidden("imagename", $recipe->cover)}}
        </div>
        <div class="form-group-custom">
            {{Form::label('description','Описание')}}
            {{Form::textarea('description', $recipe->description ,['placeholder' => 'Describe the recipe, give a little overview of what to expect ' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('ingredients','Съставки')}}
            {{Form::textarea('ingredients', $recipe->ingredients ,['placeholder' => 'The ingredients needed for the recipe, separate them with commas' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('preparation','Приготвяне')}}
            {{Form::textarea('preparation', $recipe->preparation,['placeholder' => 'The detailed recipe preparation process' ])}}
        </div>
        <div class="form-group2">
            <div class="form-edit-meta">
                <button type="submit">Добавяне</button>
            </div>
        </div>
        {{Form::hidden("_method", "PUT")}}

        {!! Form::close() !!}


    </section>
    {{--    @if (!Auth::guest())--}}
    {{--        @if (Auth::user()->id == $post->user_id)--}}
    {!! Form::open(["action" => ["RecipesController@destroy", $recipe->id], "method" => "POST", "class" => "delete"]) !!}
    {{Form::hidden("_method","DELETE")}}
    {{--            {{Form::submit('Delete this recipe', '')}}--}}
    <button type="submit">Изтриване на рецепта</button>
    {!! Form::close() !!}
    {{--        @endif--}}
    {{--    @endif--}}

@endsection
