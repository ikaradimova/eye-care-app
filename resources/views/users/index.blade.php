@extends("layouts.app")
@section("content")
    <main role="main">
        <section>
            <h2>Потребители</h2>
            <table>
                <tr>
                    <th>id</th>
                    <th>Име</th>
                    <th>Имейл</th>
                    <th>Роля</th>
                    <th>Състояние</th>
                    <th>Последна промяна</th>
                    <th>Действия</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->is_blocked === 0 ? 'Активен' : 'Блокиран'}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            {!! Form::open(["action" => ["UsersController@edit", $user->id], "method" => "POST", "class" => "edit", "id" => "user-edit-form"]) !!}
                            {{Form::hidden("_method","GET")}}
                            <button type="submit" id="user-edit-button"><i class="fas fa-user-edit"></i></button>
                            {!! Form::close() !!}

                            <a class="editPost" href="/users/{{$user->id}}/block"><i class="fas fa-user-lock"></i></a>
                            {!! Form::open(["action" => ["UsersController@destroy", $user->id], "method" => "POST", "class" => "delete", "id" => "user-deletion-form"]) !!}
                            {{Form::hidden("_method","DELETE")}}
                            <button type="submit" id="user-deletion-button"><i class="fas fa-user-times"></i></button>
                            {!! Form::close() !!}
                        </td>

                    </tr>
                @endforeach
            </table>
            <div class="form-group2 col" style="margin-top: 1em;">
                <div class="form-edit-meta">
                    <button class="btn btn-primary" style="background: #1eb6a7;">
                        <a style="color:white;text-decoration: none;" href="/users/create">Добавяне на потребител</a>
                    </button>
                </div>
            </div>

        </section>
    </main>
@endsection
