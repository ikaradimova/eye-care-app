@extends("layouts.app")
@section("content")

    <section>
        <h2>New Recipe</h2>

        {!! Form::open(['action' => 'RecipesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title', '',['placeholder' => 'This is the recipe name' ])}}
        </div>
        <div class="form-group">
            {{Form::label('preptime','Preparation Time')}}
            {{Form::text('preptime', '',['placeholder' => 'The time it would take for the whole recipe to be completed, doesnt have to be exact' ])}}
        </div>
        <div class="form-group">
            {{Form::label('image','Image')}}
{{--            {{Form::file('image', '')}}--}}
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description', '',['placeholder' => 'Describe the recipe, give a little overview of what to expect ' ])}}
        </div>
        <div class="form-group">
            {{Form::label('ingredients','Ingredients')}}
            {{Form::textarea('ingredients', '',['placeholder' => 'The ingredients needed for the recipe, separate them with commas' ])}}
        </div>
        <div class="form-group">
            {{Form::label('preparation','Preparation')}}
            {{Form::textarea('preparation', '',['placeholder' => 'The detailed recipe preparation process' ])}}
        </div>
        <div class="form-group2">
            <p>Proofread your recipe, make sure the information is clear and there are no missing ingredients</p>
{{--            {{Form::submit('Add Recipe', '')}}--}}
            <button type="submit"> Add Recipe </button>
        </div>
        {!! Form::close() !!}

    </section>
@endsection
