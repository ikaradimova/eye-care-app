@extends("layouts.app")
@section("content")
    <section>
        <h2>Рецепти</h2>
        <div class="recipes">
            @if(count($recipes) > 0)
                @foreach ( $recipes as $recipe )
                    <div class="recipe">

                        <div class="image">
                            <a href="/recipes/{{$recipe->id}}">
                                <img class="outcover" src="../storage/covers/{{$recipe->cover}}">
                            </a>
                        </div>
                        <div class="meta">
                            <p class="title">{{$recipe->title}}</p>
                            <p class="description"> {{str_limit($recipe->description, 62)}}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
