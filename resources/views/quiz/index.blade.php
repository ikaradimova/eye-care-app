@extends("layouts.app")
@section("content")
    <section>
        <h2>Тестове</h2>
        <div class="recipes">
            <div class="recipe">

                <div class="image">
                    <a href="/quiz/close-eye">
                        <img class="outcover" src="../covers/close-eye-test.png">
                    </a>
                </div>
                <div class="meta">
                    <p class="title">Тест за зрение на близо</p>
                </div>
            </div>
            <div class="recipe">

                <div class="image">
                    <a href="">
                        <img class="outcover" src="../covers/contrast-eye-test.png">
                    </a>
                </div>
                <div class="meta">
                    <p class="title">Тест за контраст</p>
                </div>
            </div>
            <div class="recipe">

                <div class="image">
                    <a href="">
                        <img class="outcover" src="../covers/central-vision-test.jpg">
                    </a>
                </div>
                <div class="meta">
                    <p class="title">Тест за централно зрение</p>
                </div>
            </div>
            <div class="recipe">

                <div class="image">
                    <a href="">
                        <img class="outcover" src="../covers/dry-eye.jpg">
                    </a>
                </div>
                <div class="meta">
                    <p class="title">Тест за сухо око</p>
                </div>
            </div>
            <div class="recipe">

                <div class="image">
                    <a href="">
                        <img class="outcover" src="../covers/color-vision-deficiency-test.jpeg">
                    </a>
                </div>
                <div class="meta">
                    <p class="title">Тест за изследване на цветно зрение</p>
                </div>
            </div>
            <div class="recipe">

                <div class="image">
                    <a href="">
                        <img class="outcover" src="../covers/astigmatism-test.gif">
                    </a>
                </div>
                <div class="meta">
                    <p class="title">Тест за астигматизъм</p>
                </div>
            </div>
        </div>
    </section>

@endsection
