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
        <h2>{{$eyeDisease->title}}</h2>
        <div class="eyeDiseaseContainer">
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
            @if ($role === 'admin')
                <div style="margin-top: 10px">
                    {!! Form::open(["action" => ["EyeDiseasesController@edit", $eyeDisease->id], "method" => "POST", "class" => "edit"]) !!}
                    {{Form::hidden("_method","GET")}}
                    <button type="submit" class="btn btn-primary float-left"
                            style="background: #1eb6a7;
                                        margin-left: 100px;">
                        Редактиране на заболяване
                    </button>
                    {!! Form::close() !!}
                    {{--                            <button type="submit"><a class="editPost" href="/recipes/{{$recipe->id}}/edit">Редактиране на рецепта</a></button>--}}
                    {!! Form::open(["action" => ["EyeDiseasesController@destroy", $eyeDisease->id], "method" => "POST", "class" => "delete"]) !!}
                    {{Form::hidden("_method","DELETE")}}
                    <button type="submit"
                            class="btn btn-primary float-right"
                            style="background: red; margin-right: 100px;">
                        Изтриване на заболяване
                    </button>
                    {!! Form::close() !!}
                </div>
            @endif

            {{--                @endif--}}
            {{--            @endif--}}

        </div>
    </section>
            @if (strtolower($role) === 'admin')
        </main>
    @endif
@endsection
