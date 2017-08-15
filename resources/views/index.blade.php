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
                {{--<li><a href="#"><img src="{{asset('images/notification-circle-blue-512.png' )}}" style="width: 30px;height: 30px;" class="glyphicon glyphicon-user"></a></li>--}}
                <li><a href="#" class='danger' title="Create" data-toggle="popover" data-placement="bottom" data-content="">
                        <span class="glyphicon glyphicon-plus" style="font-size:25px"></span>
                    </a>
                </li>
                <li><a href="#"><i class="material-icons" style="font-size:25px">add_alert</i></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user" style="font-size:25px"></span>
                        ចុះឈ្មេាះ</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in" style="font-size:25px"></span>ចូល</a></li>
            </ul>
        </div>
    </nav>
    {{--<div id="popover_content_wrapper" style="display: none">--}}
        {{--<div>--}}
            {{--<a class="js-new-org" href="#">Create Team… <span class="sub-name">A team is a group of boards and people. Use it to organize your company, side hustle, family, or friends.</span></a>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div id="popover_content_wrapper" style="display: none">
        <div>This is your div content</div>
    </div>
    <div class="container">
        <h3>Question and Answer</h3>
        <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
        <p>កូសាឡប់ម៉ងពិធីការនី!! ចេញមកCover អង់គ្លេសឡើងកប់ម៉ង Idol !!.</p>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();


        });

        $(document).ready(function(){
            $('.danger').popover({
                html : true,
                content: function() {
                    return $('#popover_content_wrapper').html();
                }
            });
        });
    </script>


@endsection
