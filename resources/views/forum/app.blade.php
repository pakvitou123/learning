<!DOCTYPE html>
<html>
<head>
    <title>Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Forum :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }} "></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>

    @yield('header')

    <!----drop down----->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!----font-Awesome----->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!----font-Awesome----->
    <!--light-box-files -->
    <script src="{{asset('js/jquery.chocolat.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8" />
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.gallery a').Chocolat();
        });
    </script>
</head>
<body>
@include('forum.nav_bar')
@include('forum.nav_bar1')

@yield('content')

@include('forum.footer')

<!----language selector----->
<script type="text/javascript" src="{{asset('js/jquery.leanModal.min.js')}}"></script>
<link href="{{asset('css/jquery.uls.css')}}" rel="stylesheet"/>
<link href="{{asset('css/jquery.uls.grid.css')}}" rel="stylesheet"/>
<link href="{{asset('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>
<!-- Source -->
<script src="{{asset('js/jquery.uls.data.js')}}"></script>
<script src="{{asset('js/jquery.uls.data.utils.js')}}"></script>
<script src="{{asset('js/jquery.uls.lcd.js')}}"></script>
<script src="{{asset('js/jquery.uls.languagefilter.js')}}"></script>
<script src="{{asset('js/jquery.uls.regionfilter.js')}}"></script>
<script src="{{asset('js/jquery.uls.core.js')}}"></script>

@yield('script')

<script>
    $( document ).ready( function() {
        $( '.uls-trigger' ).uls( {
            onSelect : function( language ) {
                var languageName = $.uls.data.getAutonym( language );
                $( '.uls-trigger' ).text( languageName );
            },
            quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
        } );
    } );
</script>
</body>
</html>