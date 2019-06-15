@extends("layouts.app")
@section("content")
    <?php $role = 'guest'; ?>
    @if (Auth::check())
        <?php
        //        use Illuminate\Support\Facades\DB;
        $user = auth()->user();
        $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
        $role = DB::table('roles')->where('id', $roleId)->first()->name;
        ?>
    @endif
    @if (strtolower($role) === 'admin')
        <main role="main">
            @endif
            <section>
                <h2>Очни заболявания</h2>
                <div class="eyeDiseases">
                    @if(count($eyeDiseases) > 0)
                        @foreach ( $eyeDiseases as $eyeDisease )
                            <div class="eyeDisease">

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
            @if (strtolower($role) === 'admin')
        </main>
    @endif
@endsection
