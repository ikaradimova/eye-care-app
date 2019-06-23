@extends("layouts.app")
@section("content")

    <section>
        <h2>Добавяне на тема</h2>

        {!! Form::open([
            'action' => 'EyeDiseasesController@store',
            'method' => 'POST',
            'enctype' => 'multipart/form-data',
            'id' => 'article-create-form'
           ]) !!}
        <div>
{{--            <label>Заглавие</label>--}}
            <input type="text" placeholder="Заглавие" class="title-field">
{{--            {{Form::label('title','Заглавие')}}--}}
{{--            {{Form::text('title', '',['placeholder' => 'Заглавие' ])}}--}}
        </div>
        <div class="add-article-field">
{{--            {{Form::label('body','Описание')}}--}}
            {{--                <br>--}}
            {{--                {{Form::text('symptoms', '',['placeholder' => 'Симптоми на болестта.' ])}}--}}
        </div>
        <div id="summernote"></div>

        <div class="form-group2 col" style="margin-top: 1em;">
            {{--            {{Form::submit('Add Recipe', '')}}--}}
            <button type="submit" class="btn btn-secondary modal-button"
                    style="width:20%; margin-top: 10px; position: relative; left: 42em">
                Добавяне
            </button>
        </div>
        {!! Form::close() !!}

    </section>
@endsection
