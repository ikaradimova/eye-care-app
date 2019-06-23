@extends("layouts.app")
@section("content")
    <main role="main">
        <section>
            <h2>Нова рецепта</h2>

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
                <button type="submit" class="btn btn-secondary modal-button">Добавяне на рецепта</button>
            </div>
            {!! Form::close() !!}

        </section>
    </main>
@endsection
