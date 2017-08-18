<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="group">Group</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-plus"></span> Create Group
                            </button>
                            {{--Modal--}}
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    {{--Modal content   --}}
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Create New Group</h4>
                                        </div>
                                        <div class="modal-body">
                                            {{--open form--}}
                                            <form class="form-horizontal" method="POST"
                                                  action="{{ route('createWorkspace') }}">
                                                {{ csrf_field() }}

                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="name" class="col-md-5 control-label"><h4>
                                                            ឈ្មោះក្រុមរបស់ឣ្នក</h4></label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control" name="name"
                                                               value="{{ old('name') }}" required autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-5 control-label"><h4>
                                                            បញ្ជូលឈ្មោះសមាជិកក្រុម</h4></label>
                                                    <div class="col-md-6">

                                                        <select class="form-control" style="width: 100%" id="users">
                                                            @foreach($query as $querys)
                                                                <option value="{{$querys->name}}" name="name_user"> {{$querys->name}} </option>
                                                            @endforeach
                                                            {{--<option value="AL">Alabama</option>--}}
                                                            {{--...--}}
                                                            {{--<option value="WY">Wyoming</option>--}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label"><h4>សូមជ្រើសរើស</h4></label>
                                                    <div class="col-md-6">
                                                        <select class="custom-select" name="browser">
                                                            <option value="public">Public</option>
                                                            <option value="private">Private</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label"><h4>ពិពណនាក្រុមរបស់ឣ្នក</h4>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <textarea id="descript" class="form-control"
                                                                  name="descript"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-5">
                                                        <button type="submit" class="btn btn-primary">
                                                            Create
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>