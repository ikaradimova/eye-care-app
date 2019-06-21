@extends("layouts.app")
@section("content")
        <section>
            <h2>Тест за зрение на близо</h2>
            <div class="close-eye-quiz-container">
                <div class="close-eye-quiz">
                    <div class="close-eye-arrow-up"><i class="fas fa-chevron-up"></i></div>
                    <div class="close-eye-arrow-right"><i class="fas fa-chevron-right"></i></div>
                    <div class="close-eye-arrow-down"><i class="fas fa-chevron-down"></i></div>
                    <div class="close-eye-arrow-left"><i class="fas fa-chevron-left"></i></div>
                    <span id="close-eye-e"><span id="letter-e">Ш</span></span>
                </div>
                <i class="fas fa-info-circle info" data-toggle="modal" data-target="#close-eye-instructions-modal"></i>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="close-eye-instructions-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Указания</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
{{--                            <p></p>--}}
                            <ul class="fa-ul">
                                <li><i class="far fa-eye"></i>Застанете на един метър от монитора.</li>
                                <li><i class="far fa-eye"></i>Ако сте с очила или лещи, останете с тях.</li>
                                <li><i class="far fa-eye"></i>Закрийте с ръка едното си око.</li>
                                <li><i class="far fa-eye"></i>Изберете посоката на отворената част на <strong class="letter-in-text">Ш</strong> чрез натискане на бутон от клавиатурата или на мишката.</li>
                            </ul>
                            <p class="warning-message"><strong>Важно!</strong> Тези тестове не заместват професионалния преглед и диагностика на очен лекар и са представени тук само с информационна цел. Наличността на тези тестове за зрение не трябва да се възприема като препоръка за самодиагностика или самолечение на заболяване. Неправилно диагностицирано или лекувано не както трябва очно заболяване би могло да доведе до загуба на зрението или постоянна загуба на функциите на зрителната система.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary modal-button" data-dismiss="modal">Разбрах и желая да продължа.</button>
{{--                            <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
