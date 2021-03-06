<?php //use Illuminate\Support\Facades\URL;
//var_dump(Request::url());
//var_dump(strpos(Request::url(), 'recipes'));
//die; ?>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        {{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
        {{--                    {{ config('app.name', 'Laravel') }}--}}
        {{--                </a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo strpos(Request::url(), 'quiz') ? "active" : ""; ?>">
                    <a class="nav-link" href="{{ url('/quiz') }}">Тестове</a>
                </li>
                <li class="nav-item <?php echo strpos(Request::url(), 'recipes') ? "active" : ""; ?>">
                    <a class="nav-link" href="{{ url('/recipes') }}">Рецепти</a>
                </li>
                <li class="nav-item <?php echo strpos(Request::url(), 'eye-diseases') ? "active" : ""; ?>">
                    <a class="nav-link" href="{{ url('/eye-diseases') }}">Очни болести</a>
                </li>
                @if (Auth::check())
                    <?php
                    //        use Illuminate\Support\Facades\DB;
                    $user = auth()->user();
                    $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
                    $role = DB::table('roles')->where('id', $roleId)->first()->name;
                    ?>
                    @if($role === 'Medical user')
                        <li class="nav-item <?php echo strpos(Request::url(), 'articles') ? "active" : ""; ?>">
                            <a class="nav-link" href="{{ url('articles') }}">Форум</a>
                        </li>
                    @endif
                @endif


            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item <?php echo strpos(Request::url(), 'login') ? "active" : ""; ?>">
                        <a class="nav-link" href="{{ route('login') }}">Логин</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item <?php echo strpos(Request::url(), 'register') ? "active" : ""; ?>">
                            <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <?php /* requires further development
                            <a class="dropdown-item" href="{{ url('/profile') }}">Профил</a> */ ?>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Изход
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
