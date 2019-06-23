@extends("layouts.app")
@section("content")
    <main role="main">
    <section class="edit">
        <h2>Редактиране на: <span> {{$eyeDisease->title}} </span></h2>
        {!! Form::open(['action' => ['EyeDiseasesController@update', $eyeDisease->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group-custom col">
            {{Form::label('title','Име')}}
            {{Form::text('title',  $eyeDisease->title ,['placeholder' => 'Име на болестта' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('symptoms','Симптоми')}}
            {{Form::text('symptoms', $eyeDisease->symptoms ,['placeholder' => 'Симптоми на болестта.' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('causes','Причини')}}
            {{Form::textarea('causes', $eyeDisease->causes ,['placeholder' => 'Причини за възникване на болестта.' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('risk-factors','Рискови фактори')}}
            {{Form::textarea('risk-factors', $eyeDisease->risk_factors ,['placeholder' => 'Рискови фактори, водещи до заболяването.' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('complications','Усложнения')}}
            {{Form::textarea('complications', $eyeDisease->complications,['placeholder' => 'Детайлно описание на усложненията, които могат да възникнат.' ])}}
        </div>
        <div class="form-group-custom col">
            {{Form::label('treatment','Лечение')}}
            {{Form::textarea('treatment', $eyeDisease->treatment,['placeholder' => 'Лечение на болестта.' ])}}
        </div>
        <div class="form-group2 col" style="margin-top: 1em;">
            <div class="form-edit-meta">
                <button type="submit" class="btn btn-secondary modal-button">Редакция</button>
            </div>
        </div>
        {{Form::hidden("_method", "PUT")}}

        {!! Form::close() !!}


    </section>
    </main>
@endsection
