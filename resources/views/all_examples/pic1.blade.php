

@extends('common.layouts.main_block')


@section('content')

    <div>
        <a class="MainPage"
           href="{{ route('MainPage') }}">
            MainPage
        </a>
    </div>


    <div class="main_map_container main_map d-none d-md-block">
        <img width="750px" src="/assets/common/img/map.png" alt="map">

        <div id="animation_container" style="background-color:rgba(66, 66, 66, 0.00); width:790px; height:544px">
            <canvas id="canvas" width="790" height="544"
                    style="position: absolute; display: block; background-color:rgba(66, 66, 66, 0.00);"></canvas>
            <div id="dom_overlay_container"
                 style="pointer-events:none; overflow:hidden; width:790px; height:544px; position: absolute; left: 0px; top: 0px; display: block;">
            </div>
        </div>
    </div>




@stop

@section('styles')
    <style>

        #animation_container {
            position: relative;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .main_map_container {
            height: 570px;
        }

    </style>
@stop

@section('scripts')
    <script>



    </script>
@stop
