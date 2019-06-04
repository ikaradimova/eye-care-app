@extends("layouts.app")
@section("content")

    <section>
        <h2>Нова болест</h2>

        {!! Form::open(['action' => 'EyeDiseasesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group-custom">
            {{Form::label('title','Име')}}
            {{Form::text('title', '',['placeholder' => 'Име на болестта' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('symptoms','Симптоми')}}
            {{Form::text('symptoms', '',['placeholder' => 'Симптоми на болестта.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('causes','Причини')}}
            {{Form::textarea('causes', '',['placeholder' => 'Причини за възникване на болестта.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('risk-factors','Рискови фактори')}}
            {{Form::textarea('risk-factors', '',['placeholder' => 'Рискови фактори, водещи до заболяването.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('complications','Усложнения')}}
            {{Form::textarea('complications', '',['placeholder' => 'Детайлно описание на усложненията, които могат да възникнат.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('treatment','Лечение')}}
            {{Form::textarea('treatment', '',['placeholder' => 'Лечение на болестта.' ])}}
        </div>
        <div class="form-group2">
            {{--            {{Form::submit('Add Recipe', '')}}--}}
            <button type="submit">Добавяне</button>
        </div>
        {!! Form::close() !!}

    </section>
@endsection
