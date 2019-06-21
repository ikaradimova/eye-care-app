@extends("layouts.app")
@section("content")
    <section>
        <h2>Тест за централно зрение</h2>
        <div class="close-eye-quiz-container">
            <div class="central-vision-quiz">
                <img class="color-vision-pic" src="../covers/ishihara1.gif">
                <p style="font-size: 1.5em">Какво виждате на картинката?</p>
                <input type="text" placeholder="Въведи число" style="padding: 3px;">
{{--                <button class="central-vision-button btn btn-outline-light">Предай</button>--}}
{{--                <br>--}}
                <button class="central-vision-button btn btn-outline-light">Нищо не виждам</button>
            </div>
        </div>
    </section>
@endsection
