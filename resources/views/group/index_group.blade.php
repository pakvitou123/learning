@extends('layouts.style')
@section('header')
    <link href="{{ asset('css/nar_group.css') }}" rel="stylesheet">
@endsection
@section('content')

        <div class="row">
            <div class="col-md-2">
                @include('group.side_bar')
            </div>
            <div class="col-md-7">
                @include('group.content')

            </div>
            <div class="col-md-3">
                <h4>hello</h4>
            </div>
        </div>

@endsection