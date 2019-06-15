<header role="banner">
    <h1>Администраторски панел</h1>
    <ul class="utilities">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>

<nav role="navigation">
    <ul class="main">
        <li class="dashboard"><a href="/home">Начално меню</a></li>
        <li class="write"><a href="/recipes/create">Добави рецепта</a></li>
        <li class="edit"><a href="/recipes">Редактирай рецепта</a></li>
        <li class="write"><a href="#">Добави заболяване</a></li>
        <li class="edit"><a href="#">Редактирай заболяване</a></li>
        <li class="comments"><a href="#">Форум</a></li>
        <li class="users"><a href="#">Потребители</a></li>
    </ul>
</nav>

{{--<main role="main">--}}
{{--    <section class="panel important">--}}
{{--        <h2>Welcome to Your Dashboard </h2>--}}
{{--        <ul>--}}
{{--            <li>Important panel that will always be really wide Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>--}}
{{--            <li>Aliquam tincidunt mauris eu risus.</li>--}}
{{--            <li>Vestibulum auctor dapibus neque.</li>--}}
{{--        </ul>--}}
{{--    </section>--}}
{{--    <section class="panel">--}}
{{--        <h2>Posts</h2>--}}
{{--        <ul>--}}
{{--            <li><b>2458 </b>Published Posts</li>--}}
{{--            <li><b>18</b> Drafts.</li>--}}
{{--            <li>Most popular post: <b>This is a post title</b>.</li>--}}
{{--        </ul>--}}
{{--    </section>--}}
{{--    <section class="panel">--}}
{{--        <h2>Chart</h2>--}}
{{--        <ul>--}}
{{--            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>--}}
{{--            <li>Aliquam tincidunt mauris eu risus.</li>--}}
{{--            <li>Vestibulum auctor dapibus neque.</li>--}}
{{--        </ul>--}}
{{--    </section>--}}
{{--    <section class="panel important">--}}
{{--        <h2>Write a post</h2>--}}
{{--        <form action="#">--}}
{{--            <div class="twothirds">--}}
{{--                <label for="name">Text Input:</label>--}}
{{--                <input type="text" name="name" id="name" placeholder="John Smith" />--}}

{{--                <label for="textarea">Textarea:</label>--}}
{{--                <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>--}}

{{--            </div>--}}
{{--            <div class="onethird">--}}
{{--                <legend>Radio Button Choice</legend>--}}

{{--                <label for="radio-choice-1">--}}
{{--                    <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" /> Choice 1--}}
{{--                </label>--}}

{{--                <label for="radio-choice-2">--}}
{{--                    <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" /> Choice 2--}}
{{--                </label>--}}


{{--                <label for="select-choice">Select Dropdown Choice:</label>--}}
{{--                <select name="select-choice" id="select-choice">--}}
{{--                    <option value="Choice 1">Choice 1</option>--}}
{{--                    <option value="Choice 2">Choice 2</option>--}}
{{--                    <option value="Choice 3">Choice 3</option>--}}
{{--                </select>--}}


{{--                <div>--}}
{{--                    <label for="checkbox">--}}
{{--                        <input type="checkbox" name="checkbox" id="checkbox" /> Checkbox--}}
{{--                    </label>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <input type="submit" value="Submit" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </section>--}}
{{--    <section class="panel">--}}
{{--        <h2>feedback</h2>--}}
{{--        <div class="feedback">This is neutral feedback Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, praesentium. Libero perspiciatis quis aliquid iste quam dignissimos, accusamus temporibus ullam voluptatum, tempora pariatur, similique molestias blanditiis at sunt earum neque.</div>--}}
{{--        <div class="feedback error">This is warning feedback--}}
{{--            <ul>--}}
{{--                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>--}}
{{--                <li>Aliquam tincidunt mauris eu risus.</li>--}}
{{--                <li>Vestibulum auctor dapibus neque.</li>--}}
{{--            </ul>  </div>--}}
{{--        <div class="feedback success">This is positive feedback</div>--}}

{{--    </section>--}}
{{--    <section class="panel ">--}}
{{--        <h2>Table</h2>--}}
{{--        <table>--}}
{{--            <tr>--}}
{{--                <th>Username</th>--}}
{{--                <th>Posts</th>--}}
{{--                <th>comments</th>--}}
{{--                <th>date</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Pete</td>--}}
{{--                <td>4</td>--}}
{{--                <td>7</td>--}}
{{--                <td>Oct 10, 2015</td>--}}

{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Mary</td>--}}
{{--                <td>5769</td>--}}
{{--                <td>2517</td>--}}
{{--                <td>Jan 1, 2014</td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </section>--}}

{{--</main>--}}