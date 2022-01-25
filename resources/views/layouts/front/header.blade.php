<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/media.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    <!-- slick css-->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick-theme.css')}}"/>
    <title>@yield('title')</title>
</head>

    @if(Lang::locale()=='ar')
        <body class="arabic">

        @else
            <body class="english">


@endif
@include('sweetalert::alert')

<div class="container-fluid pad-0 bg-main  ">
    <div class="container  ">
        <div class="float-left">
            <nav class="navbar navbar-expand pad-0 " >
                <ul class="navbar-nav  pad-0">

                    <li class="nav-item ">
                        <a href="tel:{{$my_setting->contact_phone}}" title="" class="nav-link "> <i class="fas fa-phone"></i>  {{$my_setting->contact_phone}}</a></li>
                    <li class="nav-item ">
                        <a href="https://wa.me/{{$my_setting->wats}}" title="" class="nav-link "> <i class="fab fa-whatsapp"></i>  {{$my_setting->wats}}</a>
                    </li></ul>
            </nav>
        </div>
        <div class="float-right text-dir">
            <nav class="navbar navbar-expand pad-0 " >
                <ul class="navbar-nav pad-0">

                    <li class="nav-item "><a class="nav-link " href="{{$my_setting->insta_link}}" title="instagram"><i class="fab fa-instagram"></i>  </a></li>
                    <li class="nav-item "><a class="nav-link " href="{{$my_setting->tw_link}}" title="twitter"><i class="fab fa-twitter"></i>  </a></li>
                    <li class="nav-item "><a class="nav-link " href="tel:{{$my_setting->contact_phone}}" title="call us"><i class="fas fa-phone"></i>  </a></li>
                    <li class="nav-item "><a class="nav-link " href="{{$my_setting->yt_link}}" title="youtube"><i class="fab fa-youtube"></i>  </a></li>

                </ul>


            </nav>
        </div>
        <div class="clearfix"></div>
    </div></div>

<!--- -->
<div class="container-fluid  border-main sticky-top bg-w">
    <div class="container  ">
        <div class="row  ">
            <nav class="navbar navbar-expand-lg col-12" id="start">
                <a  href="{{route('home.index')}}" class="p-2">
                    <img src="{{asset('front/img/logo.png')}}"  class="logo" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class=" fas fa-bars c-b"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-right pad-0">
                        <li class="nav-item "><a class="nav-link active" href="{{route('home.index')}}">@lang('site.home')</a></li>
                        {{-- <li class="nav-item">
                            <div class="dropdown nav-link" >
                                <div class=" dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('site.services')
                                </div>
                                <div class="dropdown-menu text-dir" aria-labelledby="dropdownMenuButton" >
                                    @foreach($my_sevices as $my_sevice )
                                        @if(Lang::locale()=='ar')
                                            <a class="dropdown-item" href="{{route('my_services.show',$my_sevice->id)}}">{{$my_sevice->name_ar}}</a>

                                        @else
                                            <a class="dropdown-item" href="{{route('my_services.show',$my_sevice->id)}}">{{$my_sevice->name_en}}</a>


                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </li> --}}

                        {{--<li class="nav-item">--}}
                            {{--<div class="dropdown nav-link" >--}}
                                {{--<div class=" dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                    {{--@lang('site.our_works')--}}
                                {{--</div>--}}
                                {{--<div class="dropdown-menu text-dir" aria-labelledby="dropdownMenuButton" >--}}
                                    {{--@foreach($my_projects as $my_project)--}}
                                        {{--@if(Lang::locale()=='ar')--}}
                                            {{--<a class="dropdown-item" href="{{route('my_projects.show',$my_project->id)}}">{{$my_project->name_ar}}</a>--}}

                                        {{--@else--}}
                                            {{--<a class="dropdown-item" href="{{route('my_projects.show',$my_project->id)}}">{{$my_project->name_en}}</a>--}}


                                        {{--@endif--}}
                                    {{--@endforeach--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}


                        @foreach (\App\Models\Category::all() as $b)
                        <li class="nav-item relative ul1"><a class="nav-link "
                                href="{{route('category.show',$b->id)}}">
                                @if (app()->getLocale() == 'en')
                                    {{ $b->name_en }}
                                @else
                                    {{ $b->name_ar }}
                                @endif

                            </a>

                            <div class=" ul2  bg-w  text-dir ">


                                @if (\App\Models\Service::where('category_id', $b->id)->count() > 0)
                                    @foreach (\App\Models\Service::where('category_id', $b->id)->get() as $c)
                                        <a class="nav-link " href="{{route('service.show',$c->id)}}">
                                            @if (app()->getLocale() == 'en')
                                                {{ $c->name_en }}
                                            @else
                                                {{ $c->name_ar }}
                                            @endif
                                        </a>
                                        {{-- <hr class="mr-0"> --}}
                                    @endforeach
                                @endif

                            </div>

                        </li>
                    @endforeach



                        <li class="nav-item "><a class="nav-link " href="{{route('all_products')}}" >{!! $my_setting['product_'.app()->getLocale()] !!}</a></li>
                        <li class="nav-item "><a class="nav-link " href="{{route('all_posts')}}" >{!! $my_setting['blog_'.app()->getLocale()] !!}</a></li>
                        <li class="nav-item "><a class="nav-link " href="{{route('about.index')}}" >{!! $my_setting['about_'.app()->getLocale()] !!}</a></li>
                        {{-- <li class="nav-item">
                            <div class="dropdown nav-link" >
                                <div class=" dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('site.our_plans')
                                </div>
                                <div class="dropdown-menu text-dir" aria-labelledby="dropdownMenuButton" >
                                    @foreach($my_plans as $my_plan)
                                        @if(Lang::locale()=='ar')
                                            <a class="dropdown-item" href="{{route('my_plans.show',$my_plan->id)}}">{{$my_plan->name_ar}}</a>

                                        @else
                                            <a class="dropdown-item" href="{{route('my_plans.show',$my_plan->id)}}">{{$my_plan->name_en}}</a>


                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </li> --}}
                        {{-- @foreach (App\Models\Service::select('id','title_en','title_ar')->get() as $item)
                        <li class="nav-item"><a class="nav-link " href="{{route('service.show',$item->id)}}" >{!!$item['title_'.app()->getLocale()]!!}</a></li>
                        @endforeach --}}

                        <li class="nav-item"><a class="nav-link " href="{{route('contacts.index')}}" >{!! $my_setting['contact_'.app()->getLocale()] !!}</a></li>

                        <li class="nav-item">
                            <div class="dropdown nav-link" >
                                <div class=" dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



                                    @if(Lang::locale()=='ar')
                                        <img src="{{asset('front/img/kuwait.png')}}" width="20">  العربيه

                                    @else
                                        <img src="{{asset('front/img/en.png')}}" width="20">  English


                                    @endif
                                </div>
                                <div class="dropdown-menu  text-dir" aria-labelledby="dropdownMenuButton" >

                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                                <a style="color: red" class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>

                                        @endforeach

                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </div>

</div>
