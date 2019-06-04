@extends("layouts.app")
@section("content")

    <section class="edit">
        <h2>Редактиране на болест <span> {{$eyeDisease->title}} </span></h2>
        {!! Form::open(['action' => ['EyeDiseasesController@update', $eyeDisease->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group-custom">
            {{Form::label('title','Име')}}
            {{Form::text('title',  $eyeDisease->title ,['placeholder' => 'Име на болестта' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('symptoms','Симптоми')}}
            {{Form::text('symptoms', $eyeDisease->symptoms ,['placeholder' => 'Симптоми на болестта.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('causes','Причини')}}
            {{Form::textarea('causes', $eyeDisease->causes ,['placeholder' => 'Причини за възникване на болестта.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('risk-factors','Рискови фактори')}}
            {{Form::textarea('risk-factors', $eyeDisease->risk_factors ,['placeholder' => 'Рискови фактори, водещи до заболяването.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('complications','Усложнения')}}
            {{Form::textarea('complications', $eyeDisease->complications,['placeholder' => 'Детайлно описание на усложненията, които могат да възникнат.' ])}}
        </div>
        <div class="form-group-custom">
            {{Form::label('treatment','Лечение')}}
            {{Form::textarea('treatment', $eyeDisease->treatment,['placeholder' => 'Лечение на болестта.' ])}}
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
    {!! Form::open(["action" => ["EyeDiseasesController@destroy", $eyeDisease->id], "method" => "POST", "class" => "delete"]) !!}
    {{Form::hidden("_method","DELETE")}}
    {{--            {{Form::submit('Delete this recipe', '')}}--}}
    <button type="submit">Изтриване на болест</button>
    {!! Form::close() !!}
    {{--        @endif--}}
    {{--    @endif--}}

@endsection
