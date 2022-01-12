@extends('layouts.front.front')
@section('title')

    @lang('site.about')

@endsection
@section('content')


    <!-----start carousel --->
    <div  class=" relative " >
        <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
        <div class="abs w-100">
            <h2>    @lang('site.about')
            </h2>
            <a href="">    @lang('site.home')
            </a>
            >>
            <a href="">     @lang('site.about')
            </a>
        </div>
    </div>
    <!--- end head --->
    <!--- -->
    <div class="container-fluid  ">
        <div class="container  ">
            <br>
            <div class="row  ">
                <h2  class="text-center col-12">    @lang('site.who_we')

                    <hr>
                </h2>
                @if(Lang::locale()=='ar')
                    <p class="col-12">  <br>
                        {{$my_setting->about_app}}
                    </p>
                @else
                    <p class="col-12">  <br>
                        {{$my_setting->about_app_en}}
                    </p>

                @endif


                <br><br>
                <div class="text-center col-12">
                    <img src="{{asset('front/img/h.jpg')}}" class="img-services">
                    <img src="{{asset('front/img/h1.jpg')}}" class="img-services">
                    <img src="{{asset('front/img/h2.jpg')}}" class="img-services">
                    <img src="{{asset('front/img/h.jpg')}}" class="img-services">
                    <img src="{{asset('front/img/h.jpg')}}" class="img-services">
                    <img src="{{asset('front/img/h.jpg')}}" class="img-services">
                </div>
                <br><br>
            </div>
        </div></div>







@endsection