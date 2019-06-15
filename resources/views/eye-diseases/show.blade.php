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
            @if (strtolower($role) === 'admin')
        </main>
    @endif
@endsection
