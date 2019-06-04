@extends("layouts.app")
@section("content")
    <section>
        <h2>{{$eyeDisease->title}}</h2>
        <div class="recipeContainer">
            <div>
                <p class="title">Симптоми</p>
                <p>{{$eyeDisease->symptoms}}</p>
            </div>
            <div>
                <p class="title">Причини</p>
                <p>{{$eyeDisease->causes}}</p>
            </div>
            <div>
                <p class="title">Рискови фактори</p>
                <p>{{$eyeDisease->risk_factors}}</p>
            </div>
            <div>
                <p class="title">Усложнения</p>
                <p>{{$eyeDisease->complications}}</p>
            </div>
            <div>
                <p class="title">Лечение</p>
                <p>{{$eyeDisease->treatment}}</p>
            </div>
            <div>
                {{--                <p>Recipe by: <strong>{{$recipe->user->name}}</strong></p>--}}
            </div>

            {{--            @if (!Auth::guest())--}}
            {{--                @if (Auth::user()->id == $post->user_id)--}}
            <div>
                <p><a class="editPost" href="/eye-diseases/{{$eyeDisease->id}}/edit">Редактиране</a></p>
            </div>
            {{--                @endif--}}
            {{--            @endif--}}

        </div>
    </section>
@endsection
