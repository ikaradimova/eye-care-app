@extends("layouts.app")
@section("content")
    <section>
        <h2>Тест за централно зрение</h2>
        <div class="close-eye-quiz-container">
            <div class="central-vision-quiz">
                <img id="central-vision-pic" src="../covers/central-vision-test.jpg">
                <p style="font-size: 1.5em">Виждате ли вълнообразни или размазани линии?</p>
                <button class="central-vision-button btn btn-outline-light">Да</button>
                <button class="central-vision-button btn btn-outline-light">Не</button>
            </div>
        </div>
    </section>
@endsection
