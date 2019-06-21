@extends("layouts.app")
@section("content")
    <section>
        <h2>Тест за изследване на цветно зрение</h2>
        <div class="close-eye-quiz-container">
            <div class="central-vision-quiz">
                <img class="color-vision-pic" src="../covers/ishihara1.gif">
                <p style="font-size: 1.5em">Какво виждате на картинката?</p>
                <input type="text" placeholder="Въведи число"
{{--                       style="padding-top: 6px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;">--}}
                       style="padding: 6px 20px 7px 20px;">
                <button class="central-vision-button btn btn-outline-light">Нищо не виждам.</button>
            </div>
            <i class="fas fa-info-circle info" data-toggle="modal" data-target="#color-vision-instructions-modal"></i>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="color-vision-instructions-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Указания</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="fa-ul">
                            <li><i class="far fa-eye"></i>Застанете на 40 см от монитора.</li>
                            <li><i class="far fa-eye"></i>Ако сте с очила или лещи, останете с тях.</li>
                            <li><i class="far fa-eye"></i>Ако разпознаете числото на картинка го въведете в полето долу. В случай, че не виждате число натиснете бутон "Нищо не виждам."</li>
                        </ul>
                        <p class="warning-message"><strong>Важно!</strong> Тези тестове не заместват професионалния преглед и диагностика на очен лекар и са представени тук само с информационна цел. Наличността на тези тестове за зрение не трябва да се възприема като препоръка за самодиагностика или самолечение на заболяване. Неправилно диагностицирано или лекувано не както трябва очно заболяване би могло да доведе до загуба на зрението или постоянна загуба на функциите на зрителната система.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary modal-button" data-dismiss="modal">Разбрах и желая да продължа.</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
