@extends("layouts.app")
@section("content")
    <main role="main">
        <section class="edit">
            <h2>Редактиране на: <span> {{$user->name}} </span></h2>
            {!! Form::open(['action' => ['UsersController@update', $user->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group-custom col">
                {{Form::label('name','Име')}}
                {{Form::text('name',  $user->name ,['placeholder' => 'Име на потребителя' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('email','Имейл')}}
                {{Form::text('email', $user->email ,['placeholder' => 'Имейл на потребителя' ])}}
            </div>
            {{--            <div class="form-group-custom col">--}}
            {{--                {{Form::label('image','Изображение')}}--}}
            {{--                {{Form::file('image')}}--}}
            {{--                {{Form::hidden("imagename", $recipe->cover)}}--}}
            {{--            </div>--}}
            <div class="form-group-custom col">
                {{Form::label('password','Парола')}}
                {{Form::text('password', $user->password ,['placeholder' => 'Парола' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('role','Роля')}}
                <select name="role" id="role">
                    <option value="1"
                            @if((int)$user->role === 1)
                            selected="selected"
                            @endif
                    >Немедицинско лице
                    </option>
                    <option value="2"
                            @if((int)$user->role === 2)
                            selected="selected"
                            @endif
                    >Mедицинско лице
                    </option>
                    <option value="3"
                            @if((int)$user->role === 3)
                            selected="selected"
                            @endif
                    >Администратор
                    </option>
                </select>
{{--                {{Form::text('role', $user->role ,['placeholder' => 'Роля на потребителя' ])}}--}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('isBlocked','Състояние')}}
                <select name="role" id="role">
                    <option value="0"
                            @if((int)$user->is_blocked === 0)
                            selected="selected"
                            @endif
                    >Активен
                    </option>
                    <option value="1"
                            @if((int)$user->is_blocked === 1)
                            selected="selected"
                            @endif
                    >Неактивен
                    </option>
                </select>
{{--                {{Form::text('isBlocked', $user->is_blocked,['placeholder' => 'Състояние на потребителя' ])}}--}}
            </div>
            <div class="form-group2 col" style="margin-top: 1em;">
                <div class="form-edit-meta">
                    <button type="submit" class="btn btn-primary" style="background: #1eb6a7">Редакция</button>
                </div>
            </div>
        </section>
    </main>
@endsection
