@extends('layouts.style')
{{--@include('nav_bar')--}}
@section('content')
    @include('group.nav_bar_group')
    @include('group.content_group')

@endsection
@section('script')
    <script type="text/javascript">
        function formatState (state) {
            if (!state.id) { return state.text; }
            var $state = $(
                '<span><img src="{{asset(Auth::user()->img )}}" class="img-flag" style="width: 30px;height: 30px;" /> ' + state.text + '</span>'
            );
            return $state;
        };

        $("#users").select2({
            templateResult: formatState
        });
    </script>
@endsection
