@extends('common.layouts.app')


@section('content')

   {{-- <div class="page_title">
        НАШІ ПЕРЕВАГИ
    </div>

    <div class="page_body">

        <div class="container">
            <div class="row no-gutters">

                @forelse($aCompanyAdvantageDescription as $key => $itCompanyAdvantageDescription)

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
                        <a class="advantages_link"
                           href="{{ route('advantages', $itCompanyAdvantageDescription->id) }}">
                            <img src="{{$itCompanyAdvantageDescription->cover_url}}" alt="">
                            <div class="advantages_link_inner_block">
                                <span class="advantages_link_text">{{$itCompanyAdvantageDescription->title}}</span>
                            </div>
                        </a>
                    </div>

                @empty

                @endforelse

            </div>
        </div>

    </div>--}}

@stop

@section('styles')
    <style>

      /*  a.advantages_link {
            position: relative;
            display: block;
            text-align: center;
            color: white;
            height: 246px;
        }

        a.advantages_link img {
            width: 100%;
            height: 100%;
            !*position: relative;*!
            !*display: block;*!
            !*text-align: center;*!
            !*color: white;*!
            !*height: 246px;*!
        }

        .advantages_link .advantages_link_inner_block {
            position:absolute;
            background:rgba(52, 52, 52, 0.8);
            top:0;
            bottom:0;
            left:0;
            right:0;
            !*transform:translate(-50%,-50%);*!
            padding:35px;
            text-align:center;
        }

        .advantages_link .advantages_link_inner_block:hover {
            background:rgba(124, 10, 3, 0.8);
        }

        .advantages_link .advantages_link_text {
            font-size: 29px;
            font-weight: 600;
            position: absolute;
            top: 50%;
            left: 10%;
            right: 10%;
            !*text-transform: uppercase;*!
            transform: translate(0, -50%);
        }*/

    </style>
@stop

@section('scripts')
    <script>



    </script>
@stop
