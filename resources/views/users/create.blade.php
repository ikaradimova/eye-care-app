@extends("layouts.app")
@section("content")
    <main role="main">
        <section>
            <h2>Нов потребител</h2>
            {!! Form::open(['action' => 'UsersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group-custom col">
                {{Form::label('name','Име')}}
                {{Form::text('name',  '' ,['placeholder' => 'Име на потребителя' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('email','Имейл')}}
                {{Form::text('email', '' ,['placeholder' => 'Имейл на потребителя' ])}}
            </div>
            {{--            <div class="form-group-custom col">--}}
            {{--                {{Form::label('image','Изображение')}}--}}
            {{--                {{Form::file('image')}}--}}
            {{--                {{Form::hidden("imagename", $recipe->cover)}}--}}
            {{--            </div>--}}
            <div class="form-group-custom col">
                {{Form::label('password','Парола')}}
                {{Form::text('password', '' ,['placeholder' => 'Парола' ])}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('role','Роля')}}
                <select name="role" id="role">
                    <option value="1">Немедицинско лице</option>
                    <option value="2">Mедицинско лице</option>
                    <option value="3">Администратор</option>
                </select>
{{--                {{Form::text('role', '' ,['placeholder' => 'Роля на потребителя' ])}}--}}
            </div>
            <div class="form-group-custom col">
                {{Form::label('isBlocked','Състояние')}}
                <select name="is_blocked" id="is_blocked">
                    <option value="0">Активен</option>
                    <option value="1">Блокиран</option>
                </select>
{{--                {{Form::text('isBlocked', '',['placeholder' => 'Състояние на потребителя' ])}}--}}
            </div>
            <div class="form-group2 col" style="margin-top: 1em;">
                <div class="form-edit-meta">
                    <button type="submit" class="btn btn-secondary modal-button">Добавяне</button>
                </div>
            </div>
        </section>
    </main>
@endsection
