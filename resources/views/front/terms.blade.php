@extends('layouts.front.front')
@section('title')

    @lang('site.terms_and_condition')

@endsection
@section('content')


    <!-----start carousel --->
    <div  class=" relative " >
        <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
        <div class="abs w-100">
            <h2>    @lang('site.terms_and_condition')
            </h2>
            <a href="">    @lang('site.home')
            </a>
            >>
            <a href="">     @lang('site.terms_and_condition')
            </a>
        </div>
    </div>
    <!--- end head --->
    <!--- -->
    <div class="container-fluid  ">
        <div class="container  ">
            <br>
            <div class="row  ">
                <h2  class="text-center col-12">    @lang('site.terms_and_condition')

                    <hr>
                </h2>
                @if(Lang::locale()=='ar')
                    <p class="col-12">  <br>
                        {{$my_setting->strategy}}
                    </p>
                @else
                    <p class="col-12">  <br>
                        {{$my_setting->strategy_en}}
                    </p>

                @endif


                <br><br>

                <br><br>
            </div>
        </div></div>







@endsection