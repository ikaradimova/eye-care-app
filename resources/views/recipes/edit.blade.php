@extends("layouts.app")
@section("content")
    <main role="main">
        <section class="edit">
            <h2>Редактиране на: <span> {{$recipe->title}} </span></h2>
            {!! Form::open(['action' => ['RecipesController@update', $recipe->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group-custom col">
                {{Form::label('title','Заглавие')}}
                {{Form::text('title',  $recipe->title ,['placeholder' => 'This is the recipe name' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('preptime','Време за подготовка')}}
                {{Form::text('preptime', $recipe->preptime ,['placeholder' => 'The time it would take for the whole recipe to be completed, doesnt have to be exact' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('image','Изображение')}}
                {{Form::file('image')}}
                {{Form::hidden("imagename", $recipe->cover)}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('description','Описание')}}
                {{Form::textarea('description', $recipe->description ,['placeholder' => 'Describe the recipe, give a little overview of what to expect ' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('ingredients','Съставки')}}
                {{Form::textarea('ingredients', $recipe->ingredients ,['placeholder' => 'The ingredients needed for the recipe, separate them with commas' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('preparation','Приготвяне')}}
                {{Form::textarea('preparation', $recipe->preparation,['placeholder' => 'The detailed recipe preparation process' ])}}
            </div>
            <div class="form-group2 col" style="margin-top: 1em;">
                <div class="form-edit-meta">
                    <button type="submit" class="btn btn-secondary modal-button">Редакция</button>
                </div>
            </div>
        </section>
    </main>
@endsection
