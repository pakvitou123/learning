<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css" rel="stylesheet">
        *{
            margin:0px;
            padding:0px;
        }
        body{
            font-size:25px;
            background: #ffffff;
        }
        nav.navbar navbar-inverse{
            background:#026aa7;
            border-color:#026aa7 ;
            color: #f3f3f3;

        }
        #news{margin : 10px 0px 0px 150px}
        .alert_list{font-size: 11px; color:grey}
        li.alert_li {
            font-size: 11px;
            color:grey;
            padding:10px 0px 2px 0px;
            border-bottom: thin solid #c0c0c0;
        }
        li.alert_li:hover{background-color:red}
        .turn_off_alert{float:right;margin-bottom :1px}
        a.alert_message{color : grey}
        a.alert_message:hover{color : grey}
    </style>
</head>
<body>
    @yield('content')

<!-- Scripts -->
    <div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        @yield('script')

    </div>
</body>
</html>
