@extends("layouts.app")
@section("content")
<section>
    <h2>Recipes</h2>
    <div class="recipes">
        @if(count($recipes) > 0)
            @foreach ( $recipes as $recipe )
                <div class="recipe">
                    <a href="/recipes/{{$recipe->id}}">
                        <div class="image">

                            <img class="outcover" src="../storage/covers/{{$recipe->cover}}">
                        </div>
                        <div class="meta">
                            <p class="title">{{$recipe->title}}</p>
                            <p class="description"> {{str_limit($recipe->description, 62)}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</section>
@endsection
