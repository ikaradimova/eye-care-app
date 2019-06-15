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
                <h2 style="text-align: center; padding: 5px">Рецепти</h2>
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

            @if (strtolower($role) === 'admin')
        </main>
    @endif
@endsection
