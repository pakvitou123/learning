{{--@include('nav_bar')--}}
@include('nav_bar')
@include('index_content')
<div class="container">
    <div class="col-md-12">
        {!! Form::open(['url'=>'/search']) !!}
        <div class="form-group">

            <div class="col-md-5">
                {{Form::text('title',null,['class'=>'form-control'])}}
            </div>
            <div class="col-md-2">
                {{Form::submit('Search',['class'=>'btn btn-success form-control '])}}
            </div>
            <div class="col-md-2">
                @if(isset($datas))

                    <div style="float: right; padding-right: 20%">
                        <a href="{{url('create/question')}}">
                            <button type="button" class="btn btn-success">Question</button>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    {{--<div class="alert alert-success" role="alert" style=""><h3--}}
                {{--style="padding-left: 15px;padding-top: 20px"></div>--}}
</div>

    @foreach($datas as $data)
    <div class="container">

        <div class="col-md 12">
            <div class="col-md-9">
               <hr>
               <div class="col-md-3">

                   <ul class="rate">
                       <li style="padding: 10px;">votes</li>
                       <li style="padding: 10px;">answers</li>
                       <li style="padding: 10px;">view</li>
                   </ul>
               </div>
               <div class="col-md-6">
                   <span class="question-text"><a href="#" style="font-size: 16px;font-weight: 400">{{$data->body}}</a></span>
               </div>
            </div>

        </div>

    </div>
    @endforeach



