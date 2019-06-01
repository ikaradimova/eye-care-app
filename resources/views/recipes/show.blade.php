@extends("layouts.app")
@section("content")
    <section>
        <h2>{{$recipe->title}}  <span>ready in {{ $recipe->preptime}} </span></h2>
        <div class="recipeContainer">
            <div>
                <img class="cover" src="../storage/covers/{{$recipe->cover}}">
            </div>

            <div>
                <p class="title">Ingredients</p>
                <p>{{$recipe->ingredients}}</p>
            </div>
            <div>
                <p class="title">Description</p>
                <p>{{$recipe->description}}</p>
            </div>
            <div>
                <p class="title">Preparation</p>
                <p>{{$recipe->preparation}}</p>
            </div>
            <div>
{{--                <p>Recipe by: <strong>{{$recipe->user->name}}</strong></p>--}}
            </div>

{{--            @if (!Auth::guest())--}}
{{--                @if (Auth::user()->id == $post->user_id)--}}
                    <div>
                        <p><a class="editPost" href="/recipes/{{$recipe->id}}/edit">Edit this post</a></p>
                    </div>
{{--                @endif--}}
{{--            @endif--}}

        </div>
    </section>
@endsection
