@extends('common.layouts.main_block')




@section('content')



   {{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>--}}

{{--  pic_center   Рисунок в центре  --}}
   <img src="/assets/common/img/ico/pic01.png" alt="exemplesLaravel\public\assets\common\img\ico\pic01.png">
   <a class="pic_center"
      href="{{ route('myPic') }}">
       pic_center
   </a>


   <img src="/assets/common/img/ico/pic01.png" alt="exemplesLaravel\public\assets\common\img\ico\pic01.png">
   <a class="pic_center"
      href="{{ route('threePicInCenterBtstrp') }}">
       threePicInCenterBtstrp
   </a>













@stop


@section('styles')

    <style>



    </style>

@stop


@section('scripts')


    <script>



    </script>

@stop
