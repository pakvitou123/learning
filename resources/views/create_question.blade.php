@extends('layouts.style')
@section('content')

    <div class="container">
        <div class="col-md-12">
            {!! Form::open(['url'=>'created']) !!}
            <div class="col-md-6">
                {{Form::textarea('text',null,['class'=>'form-control'])}}
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="col-md-12">
                <div class="col-md-1">
                    {{Form::submit('Save',['class'=>'btn btn-success form-control '])}}
                </div>
                <div class="col-md-11"></div>
        </div>
        {!! Form::close() !!}
    </div>
    {{--hello--}}
    @endsection