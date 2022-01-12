

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
                <a href="">    @lang('site.projects')
                </a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">@lang('site.projects')


                        <hr>
                    </h2>

                    <p class="col-12 "><br>@lang('site.our_projects')</p>
                    <br><br>
                    <br><br>

                    @foreach($services as $service)
                        <div class="col-md-6">
                            <h4>{{$service->title_ar}}</h4>

                            <p>{{$service->content_ar}}</p>

                            <a href="{{route('my_projects.show',$service->id)}}" class="btn btn-primary mb-3">@lang('site.view_more')</a>
                        </div>
                        <div class="text-center col-md-6">
                            <a href="{{asset($service->img)}}" target="_blank">
                                <img id="myImg" src="{{asset($service->img)}}" class="w-100">
                            </a>
                            <br><br>
                        </div>
                    @endforeach         </div></div>
            <br><br>

            <br><br></div>
        <!--- -->


    @else


        {{--<!-----start carousel --->--}}
        {{--<div  class=" relative " >--}}
            {{--<img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">--}}
            {{--<div class="abs w-100">--}}
                {{--<h2>    @lang('site.projects')</h2>--}}
                {{--<a href="">    @lang('site.home')--}}
                {{--</a>--}}
                {{-->>--}}
                {{--<a href="">    @lang('site.projects')--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!--- end head --->--}}
        {{--<!--- -->--}}
        {{--<div class="container-fluid  ">--}}
            {{--<div class="container  ">--}}
                {{--<br>--}}
                {{--<div class="row  ">--}}
                    {{--<h2  class="text-center col-12">@lang('site.projects')--}}


                        {{--<hr>--}}
                    {{--</h2>--}}

                    {{--<p class="col-12"><br>@lang('site.our_projects')</p>--}}
                    {{--<br><br>--}}




                    {{--<div class="row">--}}
                        {{--@foreach($services as $service)--}}
                        {{--<div class="col-md-3 col-sm-6 col-12 mar">--}}

                            {{--<div class="card " style="width: 18rem;">--}}
                                {{--<img class="card-img-top" src="{{asset('myfiles/'.$service->img)}}" alt="Card image cap">--}}
                                {{--<div class="card-body" id="card-body">--}}

                                    {{--<h5 class="text-center card-title">{{$service->title_en}}</h5>--}}
                                    {{--<div class="col-md-12 text-center">--}}
                                        {{--<a href="#" class="text-center btn btn-primary">@lang('site.view_more')</a>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                            {{--@endforeach--}}

                    {{--</div>--}}






                    {{--<br><br>--}}
                {{--</div>--}}
            {{--</div></div>--}}
        {{--<!--- -->--}}

















        <!-----start carousel --->
        <div  class=" relative " >
            <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
            <div class="abs w-100">
                <h2>    @lang('site.projects')</h2>
                <a href="">    @lang('site.home')
                </a>
                >>
                <a href="">    @lang('site.projects')
                </a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid  mt-3">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">@lang('site.projects')


                        <hr>
                    </h2>

                    <p class="col-12"><br>@lang('site.our_projects')</p>
                    <br><br>
                    <br><br>
                    @foreach($services as $service)
                        <div class="col-md-6">
                            <h4>{{$service->title_en}}</h4>

                            <p>{{$service->content_en}}</p>

                            <a href="{{route('my_projects.show',$service->id)}}" class="btn btn-primary mb-3">@lang('site.view_more')</a>
                        </div>
                        <div class="text-center col-md-6">
                            <a href="{{asset($service->img)}}" target="_blank">
                            <img id="myImg" src="{{asset($service->img)}}" class="w-100">
                            </a>
                            <br><br>
                        </div>
                    @endforeach         </div></div>
            <br><br>

            <br><br></div>
        <!--- -->










    @endif

@endsection