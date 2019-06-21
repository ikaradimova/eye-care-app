@extends("layouts.app")
@section("content")
    <section>
        <h2>Тест за централно зрение</h2>
        <div class="close-eye-quiz-container">
            <div class="central-vision-quiz">
                <img id="astigmatism-pic" src="../covers/astigmatism2.jpg">
                <p style="font-size: 1.5em">Виждате ли някои от линиите по-ясни или по-тъмни?</p>
                <button class="central-vision-button btn btn-outline-light">Да</button>
                <button class="central-vision-button btn btn-outline-light">Не</button>
            </div>
        </div>
    </section>
@endsection
