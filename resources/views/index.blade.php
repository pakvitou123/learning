@extends('layouts.style')
@section('content')

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span>Learning</a>
            </div>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ស្វែងរក...">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <div class="header">
                <a href="#"><span class="header-logo-default"></span> </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><img src="{{asset('images/yuyu.jpg' )}}" style="width: 30px;height: 30px;" class="glyphicon glyphicon-user"></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-plus" ></span></a>
                </li>
                <li><a href="#"><i class="material-icons">add_alert</i></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user" ></span>
                        ចុះឈ្មេាះ</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in" ></span>ចូល</a></li>
            </ul>
        </div>
    </nav>
    <div>
        <a href="#" id="news" class="btn">News</a>
        <div style="display:none;" class="alert_list">
            <ul class="unstyled" style="list-style-type: none">
                <li data-alert_id="2" class="alert_li"><a href="#" style="font-size: 22px;color:;"> Create Group</a> <br /><a href="#" class="turn_off_alert">turn off</a><div class="clearfix"></div></li>
                <li data-alert_id="1" class="alert_li"><a href="#" class="alert_message">Messaggio di notifica un po più lungo del normale</a> <br /><a href="#" class="turn_off_alert">turn off</a><div class="clearfix"></div></li>
            </ul>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $("#news").popover({
            'title' : 'Notifiche',
            'html' : true,
            'placement' : 'bottom',
            'content' : $(".alert_list").html()
        });

        $('.turn_off_alert').live('click', function(event){
            var alert = $(this).parent();
            var alert_id = alert.data("alert_id");
            alert.hide("fast");

        });


    </script>


@endsection
