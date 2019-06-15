@extends("layouts.app")
@section("content")
    <?php $role = 'guest'; ?>
    @if (Auth::check())
        <?php
        //        use Illuminate\Support\Facades\DB;
        $user = auth()->user();
        $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
        $role = strtolower(DB::table('roles')->where('id', $roleId)->first()->name);
        ?>
    @endif
    @if ($role === 'admin')
        <main role="main">
            @endif
            <section>
                <h2>{{$recipe->title}} <span>готово за {{ $recipe->preptime}} </span></h2>
                <div class="recipeContainer">
                    <div>
                        <img class="cover" src="../storage/covers/{{$recipe->cover}}">
                    </div>

                    <div>
                        <p class="title">Съставки</p>
                        <p>{{$recipe->ingredients}}</p>
                    </div>
                    <div>
                        <p class="title">Описание</p>
                        <p>{{$recipe->description}}</p>
                    </div>
                    <div>
                        <p class="title">Приготвяне</p>
                        <p>{{$recipe->preparation}}</p>
                    </div>
                    @if ($role === 'admin')
                        <div style="margin-top: 10px">
                                {!! Form::open(["action" => ["RecipesController@edit", $recipe->id], "method" => "POST", "class" => "edit"]) !!}
                                {{Form::hidden("_method","GET")}}
                                <button type="submit" class="btn btn-primary float-left"
                                        style="background: #1eb6a7;
                                        margin-left: 100px;">
                                    Редактиране на рецепта
                                </button>
                                {!! Form::close() !!}
                                {{--                            <button type="submit"><a class="editPost" href="/recipes/{{$recipe->id}}/edit">Редактиране на рецепта</a></button>--}}
                                {!! Form::open(["action" => ["RecipesController@destroy", $recipe->id], "method" => "POST", "class" => "delete"]) !!}
                                {{Form::hidden("_method","DELETE")}}
                                <button type="submit"
                                        class="btn btn-primary float-right"
                                        style="background: red; margin-right: 100px;">
                                    Изтриване на рецепта
                                </button>
                                {!! Form::close() !!}
                        </div>
                    @endif

                </div>
            </section>
            @if (strtolower($role) === 'admin')
        </main>
    @endif
@endsection
