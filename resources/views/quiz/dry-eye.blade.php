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
            </div>
            <i class="fas fa-info-circle info" data-toggle="modal" data-target="#dry-eye-instructions-modal"></i>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="dry-eye-instructions-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <li><i class="far fa-eye"></i>Премигнете два пъти.</li>
                            <li><i class="far fa-eye"></i>Натиснете бутона за старт.</li>
                            <li><i class="far fa-eye"></i>Стойте с отворени очи възможно най-дълго време.</li>
                            <li><i class="far fa-eye"></i>При поява на дискомфорт(парене, глождене, сухота и т.н.) натиснете бутона за пауза.</li>
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
