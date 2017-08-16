@extends('layouts.style')
@section('content')


    <div>
        <a href="#" id="news" class="btn">Notification</a>
        <div style="display:none;" class="alert_list">
            <ul class="unstyled" style="list-style-type: none">
                <li data-alert_id="2" class="alert_li"><a href="#" style="font-size: 22px;color:;"> Create Group</a>
                    <br/><a href="#" class="turn_off_alert">turn off</a>
                    <div class="clearfix"></div>
                </li>
                <li data-alert_id="1" class="alert_li"><a href="#" class="alert_message">Messaggio di notifica un po più
                        lungo del normale</a> <br/><a href="#" class="turn_off_alert">turn off</a>
                    <div class="clearfix"></div>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-0"></div>
            <div class="col-md-2">
                <ul>
                    <li>votes</li>
                    <li>answers</li>
                    <li>view</li>
                </ul>
            </div>
            <div class="col-md-9">
               <span class="question-text"><a href="#">How to add smooth scrolling to all in page anchor links</a></span>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="border">
        <hr>
    </div>
    <div class="container">
        <a href="{{url('create/question')}}">
            <button type="button" class="btn btn-success">Create</button>
        </a>
    </div>
@endsection

@section('script')
    <script type="text/javascript">

        $("#news").popover({
            'title': 'Notifiche',
            'html': true,
            'placement': 'bottom',
            'content': $(".alert_list").html()
        });

        $('.turn_off_alert').live('click', function (event) {
            var alert = $(this).parent();
            var alert_id = alert.data("alert_id");
            alert.hide("fast");

        });

    </script>


@endsection
