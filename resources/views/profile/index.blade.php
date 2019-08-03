@extends("layouts.app")
@section("content")
    <section>
        <div class="container">
            <div class="row m-y-2">
                <div class="col-lg-8 push-lg-4">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Профил</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Резултати</a>
                        </li>
                    </ul>
                    <div class="tab-content p-b-3">
                        <div class="tab-pane active" id="profile">
                            <h4 class="m-y-2" style="color: #000;">Профил</h4>

                            <form role="form" id="profile-form">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Име</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="RegUser">
                                    </div>
                                </div>
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-lg-3 col-form-label form-control-label">Фамилия</label>--}}
{{--                                    <div class="col-lg-9">--}}
{{--                                        <input class="form-control" type="text" value="Bishop">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Имейл</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" value="RegUser@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Държава</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Град</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Адрес</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" placeholder="">
                                    </div>
                                </div>
    {{--                                <div class="form-group row">--}}
    {{--                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>--}}
    {{--                                    <div class="col-lg-9">--}}
    {{--                                        <input class="form-control" type="text" value="janeuser">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Парола</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" value="RegUser">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Потвърди парола</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" value="RegUser">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="button" class="btn btn-secondary modal-button" value="Запази промените">
                                    </div>
                                </div>
                            </form>
                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="messages">
{{--                            <h4 class="m-y-2" style="color: #000">Резултати</h4>--}}
                            <h5 class="m-y-2 test-results">Тест за зрение на близо</h5>
                            <table class="table table-striped results">
                                <thead>
                                <tr >
                                    <th scope="col">#</th>
                                    <th scope="col">Ляво око</th>
                                    <th scope="col">Дясно око</th>
                                    <th scope="col">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Добър</td>
                                    <td>Добър</td>
                                    <td>23-06-2019</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5 class="m-y-2 test-results">Тест за контраст</h5>
                            <table class="table table-striped results">
                                <thead>
                                <tr >
                                    <th scope="col">#</th>
                                    <th scope="col">Ляво око</th>
                                    <th scope="col">Дясно око</th>
                                    <th scope="col">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Добър</td>
                                    <td>Добър</td>
                                    <td>23-06-2019</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5 class="m-y-2 test-results">Тест за централно зрение</h5>
                            <table class="table table-striped results">
                                <thead>
                                <tr >
                                    <th scope="col">#</th>
                                    <th scope="col">Ляво око</th>
                                    <th scope="col">Дясно око</th>
                                    <th scope="col">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Добър</td>
                                    <td>Добър</td>
                                    <td>23-06-2019</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5 class="m-y-2 test-results">Тест за сухо око</h5>
                            <table class="table table-striped results">
                                <thead>
                                <tr >
                                    <th scope="col">#</th>
                                    <th scope="col">Резултат</th>
                                    <th scope="col">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Добър</td>
                                    <td>23-06-2019</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5 class="m-y-2 test-results">Тест за цветно зрение</h5>
                            <table class="table table-striped results">
                                <thead>
                                <tr >
                                    <th scope="col">#</th>
                                    <th scope="col">Резултат</th>
                                    <th scope="col">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Лош</td>
                                    <td>23-06-2019</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5 class="m-y-2 test-results">Тест за астигматизъм</h5>
                            <table class="table table-striped results">
                                <thead>
                                <tr >
                                    <th scope="col">#</th>
                                    <th scope="col">Ляво око</th>
                                    <th scope="col">Дясно око</th>
                                    <th scope="col">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Добър</td>
                                    <td>Добър</td>
                                    <td>23-06-2019</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pull-lg-8 text-xs-center">
                    <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar">
                    <p class="m-t-2">Добави снимка</p>
                    <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input">
                        <span class="custom-file-control">Избери файл</span>
                    </label>
                </div>
            </div>
        </div>
        <hr>
    </section>
@endsection
