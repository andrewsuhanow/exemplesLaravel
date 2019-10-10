

@extends('common.layouts.main_block')


@section('content')



    <div class="brunches_block">
        <div class="container">
            <div class="row">

                <div class="col-md">
                    <div class="brand_item">
                        <div class="brunch_logo">
                            {{--<img src="/assets/common/img/myasna_lavka0.png" alt="Мясна лавка">--}}
                            <img width="80px" src="/assets/common/img/myasna_lavka.png" alt="Мясна лавка">
                        </div>
                        <div class="brunch_text invisible">
                            ТМ «М&#39;ясна Лавка» надає можливість споживачеві купувати і споживати
                            ковбасні вироби, які відповідають вимогам, що пред&#39;являються до органолептичних
                            показниках продукції (без сої, без ГМО, без яскраво виражених барвників і недорогих
                            ароматів), за доступною ціною і в точній вазі, в сучасній упаковці.
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="brand_item">
                        <div class="brunch_logo">
                            <img src="/assets/common/img/dobrov.png" alt="Добров">
                        </div>
                        <div class="brunch_text invisible">
                            ТМ «Добров» надає можливість споживачеві купувати і споживати ковбасні
                            вироби високої якості відповідно згідно ДСТУ.
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="brand_item">
                        <div class="brunch_logo">
                            <img src="/assets/common/img/kovbasny_ryad.png" alt="Ковбасний ряд">
                        </div>
                        <div class="brunch_text invisible">
                            ТМ «Ковбасний ряд» надає можливість споживачеві купувати і споживати
                            ковбасні вироби за доступною ціною, у привабливій оболонці і в різних форматах
                            (індивідуальна упаковка, гастрономія).
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div>
        <a class="MainPage"
           href="{{ route('MainPage') }}">
            MainPage
        </a>
    </div>




@stop

@section('styles')
    <style>



    </style>
@stop

@section('scripts')
    <script>

         $(function () {


             $('.brand_item').bind('click', function () {
                 // console.log("1111111");
                 var text = $(this).find('.brunch_text');

                 if ($(text).hasClass('invisible')) {
                     $(text).removeClass('invisible');
                 } else {

                     $(text).addClass('invisible');
                 }
             });
         });

    </script>
@stop
