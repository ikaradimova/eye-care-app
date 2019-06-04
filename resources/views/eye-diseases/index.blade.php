@extends("layouts.app")
@section("content")
    <section>
        <h2>Очни болести</h2>
        <div class="recipes">
            @if(count($eyeDiseases) > 0)
                @foreach ( $eyeDiseases as $eyeDisease )
                    <div class="recipe">

                        <div class="image">
                            <a href="/eye-diseases/{{$eyeDisease->id}}">
                                <p class="title">{{$eyeDisease->title}}</p>
{{--                                <img class="outcover" src="../storage/covers/{{$recipe->cover}}">--}}
                            </a>
                        </div>
                        <div class="meta">
{{--                            <p class="title">{{$eyeDisease->title}}</p>--}}
                            <p class="description"> {{str_limit($eyeDisease->symptoms, 62)}}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
