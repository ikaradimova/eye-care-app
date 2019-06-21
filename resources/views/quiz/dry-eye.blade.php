@extends("layouts.app")
@section("content")
    <section>
        <h2>Тест за сухо око</h2>
        <div class="close-eye-quiz-container">
            <div class="dry-eye-quiz">
                <div id="chronoExample">
                    <div class="values" style="font-size: 5em;">00:00:00</div>
                    <div>
                        <button class="startButton btn btn-outline-success">Старт</button>
                        <button class="pauseButton btn btn-outline-info" >Пауза</button>
                        <button class="stopButton btn btn-outline-danger">Стоп</button>
                        <button class="resetButton btn btn-outline-warning">Рестарт</button>
                    </div>
                </div>

                {{--                <img id="central-vision-pic" src="../covers/central-vision-test.jpg">--}}
{{--                <p style="font-size: 1.5em">Виждате ли вълнообразни или размазани линии?</p>--}}
{{--                <button class="central-vision-button btn btn-outline-light">Да</button>--}}
{{--                <button class="central-vision-button btn btn-outline-light">Не</button>--}}
            </div>
        </div>
    </section>
@endsection
