<?php $role = 'guest'; ?>
@if (Auth::check())
    <?php
    //        use Illuminate\Support\Facades\DB;
    $user = auth()->user();
    $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
    $role = DB::table('roles')->where('id', $roleId)->first()->name;
    ?>
@endif
@if (strtolower($role) === 'admin')
    @include('admin-panel.admin-panel')
@else (strtolower($role) !== 'admin')
    @extends('layouts.app')
<?php /*
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div> {{$role}}</div>
                                                        <div class="alert alert-success" role="alert">
                                                            {{ session('status') }}
                                                        </div>


                        You are logged in!

                        <?php  ?>
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="Enter title" class="form-control">
                            </div>
                            <div>
                            <textarea name="content" id="content" class="form-control" cols="30" rows="10">

                            </textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    */?>
@endif
