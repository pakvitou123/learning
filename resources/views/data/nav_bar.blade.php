@extends('layouts.style')
@section('content')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/home"><span class="glyphicon glyphicon-home"></span>Learning</a>
            </div>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ស្វែងរក...">
                </div>
                <a href="{{url('search')}}"></a> <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <div class="header">
                <a href="#"><span class="header-logo-default"></span> </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>
                            ចុះឈ្មេាះ</a></li>
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>ចូល</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="{{asset(Auth::user()->img )}}" style="width: 30px;height: 30px;"
                                 class="glyphicon glyphicon-user">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{url('/profile')}}"><span class="glyphicon glyphicon-user"></span> Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <h4>logout</h4>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            {{--<li>--}}
                                {{--<a href="formedit" >--}}
                                    {{--<h4>ផ្លាស់ប្ដូររូបភាព</h4>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="group">Create Group</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="material-icons">add_alert</i></a></li>

                @endif
            </ul>
        </div>
    </nav>
@endsection


