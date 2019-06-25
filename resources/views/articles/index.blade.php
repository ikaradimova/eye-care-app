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
                <h2>Форум</h2>
                @if (strtolower($role) !== 'admin')
                    <a href="/articles/create" class="add-article">
                        Създай нова тема
                    </a>
                @endif
                @if(count($articles) > 0)

                    <table class="table table-striped results">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Тема</th>
                            <th scope="col">Автор</th>
                            <th scope="col">Отговори</th>
                            <th scope="col">Последен отговор</th>
                            <th scope="col">Дата на публикуване</th>
                            @if (strtolower($role) === 'admin')
                                <th scope="col">Действия</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $articles as $article )
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>
                                    <a href="/articles/{{$article->id}}"><h6
                                                style="margin-top: 10px; margin-bottom: 0">{{$article->title}}</h6></a>
                                    <p>
{{--                                        {{str_limit($article->body, 62)}}</p>--}}
                                </td>
                                <td>{{$article->author}}</td>
                                <td>{{$article->comments_count}}</td>
                                <td>
                                @if ($article->comments_count > 0)
                                        <span style="margin-top: 0; margin-bottom: 0">{{$article->comment_last['body']}}</span>
                                        <br>
                                        <span style="margin-top: 0; margin-bottom: 0"> от </span>
                                        <span style="margin-top: 0; margin-bottom: 0">{{$article->comment_last_author}}</span>
                                @endif
                                </td>
                                <td>{{$article->created_at}}</td>
                                @if (strtolower($role) === 'admin')
                                    <td style="text-align: center; color: red"><i class="fas fa-times"
                                                                                  style="color: red"></i></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                @endif
            </section>
            @if (strtolower($role) === 'admin')
        </main>
    @endif
@endsection
