

@extends('layouts.front.front')
@section('title')

    @lang('site.projects')

@endsection
@section('content')


    @if(Lang::locale()=='ar')


        <!-----start carousel --->
        <div  class=" relative " >
            <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
            <div class="abs w-100">
                <h2>    @lang('site.projects')</h2>
                <a href="">    @lang('site.home')
                </a>
                >>
                <a href="">    {{$service->title_ar}}
                </a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid  ">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">{{$service->name_ar}}


                        <hr>
                    </h2>

                    <p class="col-12"><br>{{$service->content_ar}}</p>
                    <br><br>
                    <div class="text-center col-12">
                        @foreach($service_images as $service_image)
                            <a href="{{asset('myfiles/'.$service_image->img)}}" target="_blank">
                            <img id="myImg" src="{{asset('myfiles/'.$service_image->img)}}" class="img-services" style="width: 300px;height: 223px">
                            </a>
                        @endforeach
                    </div>
                    <br><br>
                </div>
            </div></div>
        <!--- -->



    @else

        <!-----start carousel --->
        <div  class=" relative " >
            <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
            <div class="abs w-100">
                <h2>    @lang('site.projects')</h2>
                <a href="">    @lang('site.home')
                </a>
                >>
                <a href="">    {{$service->title_en}}
                </a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid  ">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">{{$service->name_en}}


                        <hr>
                    </h2>

                    <p class="col-12"><br>{{$service->content_en}}</p>
                    <br><br>
                    <div class="text-center col-12">
                        @foreach($service_images as $service_image)
                            <a href="{{asset('myfiles/'.$service_image->img)}}" target="_blank">

                            <img id="myImg" src="{{asset('myfiles/'.$service_image->img)}}" class="img-services" style="width: 300px;height: 223px">
                            </a>
                        @endforeach
                    </div>
                    <br><br>
                </div>
            </div></div>
        <!--- -->



    @endif

@endsection