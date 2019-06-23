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
                <a href="/articles/create" class="add-article">
                    Създай нова тема
                </a>
{{--                <button type="button" class="btn btn-secondary modal-button" data-dismiss="modal">Разбрах и желая да продължа.</button>--}}
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $articles as $article )
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="/articles/{{$article->id}}"><h6 style="margin-top: 10px; margin-bottom: 0">{{$article->title}}</h6></a>
                                    <p>
                                        {{str_limit($article->body, 62)}}</p>
                                </td>
                                <td>Автор 1</td>
                                <td>1</td>
                                <td>
                                    <a href=""><span style="margin-top: 0; margin-bottom: 0">Отговор 1 на тема 1</span></a>
                                    <br>
                                    <span style="margin-top: 0; margin-bottom: 0"> от </span>
                                    <span style="margin-top: 0; margin-bottom: 0">Коментиращ 1</span>
                                </td>
                                <td>{{$article->created_at}}</td>
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
