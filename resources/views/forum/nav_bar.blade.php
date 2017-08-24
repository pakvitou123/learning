<div class="header">
    <div class="container">
        <div class="col-sm-3 logo">
            <h1><a href="/home"><span class="highlight">C</span>ommunity</a></h1>
        </div>
        <div class="col-sm-9 logo_right">
            <div class="social">
                <a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>
                <a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                <a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>
                <a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>
                <a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>
            </div>
            <!-- script for menu -->
            <span class="menu"></span>
            <div class="top-menu">
                <ul>
                    @if(Auth::guest())
                    <li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal">Login</a></li>
                    <li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{asset('/profile/'.Auth::user()->img )}}" style="width: 30px;height: 30px;"
                                     class="glyphicon glyphicon-user">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <h4>ចាកចេញ</h4>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_2">
                                        <h4>ផ្លាស់ប្ដូររូបភាព</h4>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"> </div>
            <!-- Modal -->
            <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog_2">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <div class="head_4">
                                    <p>Login</p>
                                </div>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form class="register" action="{{ route('login') }}"  method="POST">
                                {{ csrf_field() }}
                                <div class="section">
                                    <label for="username" class="field prepend-icon">
                                        <input type="email" name="email" id="username" placeholder="Your Email">
                                    </label>
                                </div>
                                <div class="section">
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" placeholder="Password">

                                    </label>
                                </div>
                                <div class="section">
                                    <div class="submit"><input type="submit"></div>
                                </div>
                                <ul class="new">
                                    <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
                                    <li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
                                    <div class="clearfix"></div>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
                <div class="modal-dialog dialog_3">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel"><div class="head_4">
                                    <p>Register</p>
                                </div></h4>
                        </div>
                        <form method="POST" class="register" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="name" id="User name" placeholder="User Name" required autofocus>
                                    <input id="img" type="hidden" name="img" value="images/yuyu.jpg">
                                </label>
                            </div>

                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="email" name="email" id="Email" placeholder="Your Email" required>
                                </label>
                            </div>
                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" placeholder="Password" required>
                                </label>
                            </div>
                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password_confirmation" id="password" placeholder="Comfirm Password" >
                                </label>
                            </div>

                            <div class="section">
                                <div class="submit"><input type="submit"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="applyModal_2" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog_2">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <div class="head_4">
                                    <p>Profile</p>
                                </div>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form class="register" method="POST" action="user-profile" enctype="multipart/form-data" file="true">
                                {{ csrf_field() }}
                                <div class="section">
                                    <label for="username" class="field prepend-icon">
                                        @if(!Auth::guest())
                                            <input type="text" name="name" id="username" placeholder="Username" value="{{Auth::user()->name}}">
                                        @endif

                                    </label>
                                </div>
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="file" name="img" >

                                    </label>
                                </div>
                                <div class="section">
                                    <div class="submit"><input type="submit"></div>
                                </div>
                                <ul class="new">
                                    <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
                                    <li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
                                    <div class="clearfix"></div>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>