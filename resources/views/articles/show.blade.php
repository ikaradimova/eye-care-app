@extends("layouts.app")
@section("content")
    <?php $role = 'guest'; ?>
    @if (Auth::check())
        <?php
        //        use Illuminate\Support\Facades\DB;
        $user = auth()->user();
        $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
        $role = strtolower(DB::table('roles')->where('id', $roleId)->first()->name);
        ?>
    @endif
    @if ($role === 'admin')
        <main role="main">
            @endif
            <section>
{{--                <h2>{{$article->title}}</h2>--}}
{{--                <p style="margin: -10px 0 0 0; font-size: 12px; color: #808080">от Автор 1</p>--}}
{{--                <p style="margin: 0 0 20px 0;font-size: 12px; color: #808080">{{ $article->created_at }}</p>--}}
{{--                <div class="articleContainer">--}}

{{--                    <p>{{$article->body}}</p>--}}
{{--                    --}}{{--                @endif--}}
{{--                    --}}{{--            @endif--}}

{{--                </div>--}}
                <div class="container">

                    <div class="row">

                        <!-- Post Content Column -->
                        <div class="col-lg-12">

                            <!-- Title -->
                            <h2>{{$article->title}}</h2>

                            <!-- Author -->
                            <p>
                                от <span style="color: #1eb6a7">Автор 1</span>
                            </p>

                            <hr>

                            <!-- Date/Time -->
                            <p>Публикувано на {{$article->created_at}}</p>

                            <hr>

                            <!-- Post Content -->
{{--                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>--}}

{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>--}}

{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>--}}

{{--                            <blockquote class="blockquote">--}}
{{--                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>--}}
{{--                                <footer class="blockquote-footer">Someone famous in--}}
{{--                                    <cite title="Source Title">Source Title</cite>--}}
{{--                                </footer>--}}
{{--                            </blockquote>--}}

{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>--}}

{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>--}}

{{--                            <div class="com-text">--}}
{{--                                <pre> {{$article->body}} </pre>--}}
{{--                            </div>--}}
{{--                            <div class="com-text">--}}
{{--                                {{nl2br($article->body)}}--}}
{{--                            </div>--}}
{{--                            {{strip_tags($article->body)}}--}}
{{--                            <p>{{ $article->body }}</p>--}}
                            <p>{!! $article->body !!}</p>

                            <hr>

                            <!-- Comments Form -->
                            <div class="card my-4">
                                <h5 class="card-header">Остави коментар: </h5>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-secondary modal-button">Публикувай</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Single Comment -->
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.row -->

                </div>

            </section>
            @if (strtolower($role) === 'admin')
        </main>
    @endif
@endsection
