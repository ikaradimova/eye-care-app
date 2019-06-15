<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <?php $role = 'guest'; ?>
    @if (Auth::check())
        <?php
        //        use Illuminate\Support\Facades\DB;
        $user = auth()->user();
        $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
        $role = DB::table('roles')->where('id', $roleId)->first()->name;
        ?>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <?php if(strtolower($role) !== 'admin'): ?>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <?php else: ?>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <?php endif;?>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">--}}
    {{--    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
</head>
<body>
<div id="app">

    @if(strtolower($role) !== 'admin')
        @include('navbar.navbar');
    @else
        @include('admin-panel.admin-panel')
    @endif
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
