<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    <!-- slick css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/slick-theme.css') }}" />
    <title>@yield('title')</title>
</head>

@if (Lang::locale() == 'ar')

    <body class="arabic">
    @else

        <body class="english">
@endif
@include('sweetalert::alert')

<div class="container-fluid pad-0 bg-blue  ">
    <div class="container  ">
        <div class="">
            <nav class="navbar navbar-expand pad-0 justify-content-center">
                <ul class="navbar-nav  pad-0 align-items-center" style="direction: ltr">
                    <li class="nav-item d-lg-block d-none ">
                        السبت - الخميس: 8:00 - 12:00
                        &nbsp; <i class="fa fa-clock" aria-hidden="true"></i>

                    </li>
                    <li class="nav-item  d-lg-block d-none">
                        <a href="tel:{{ $my_setting->contact_phone }}" title="" class="nav-link ">
                            {{ $my_setting->contact_phone }} &nbsp; <i class="fas fa-phone"></i></a>
                    </li>
                    <li class="nav-item  d-lg-block d-none">
                        <a href="" title="" class="nav-link ">
                            {{ $my_setting->contact_email }} &nbsp; <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item ">
                        مؤسسة تبارك المدينة لخدمات نقل الأثاث والتنظيف
                        &nbsp; <i class="fa fa-info-circle" aria-hidden="true"></i>

                    </li>

                </ul>
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<!--- -->
<div class="container-fluid  border-main sticky-top bg-w">
    <div class="container  ">
        <div class="row  justify-content-between ">
            <a href="{{ route('home.index') }}" class="p-2">
                <img src="{{ asset('front/img/logo-free-img.webp') }}" class="logo">
            </a>
            <nav class="navbar navbar-expand-lg" id="start">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class=" fas fa-bars c-b"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav  pad-0">
                        <li class="nav-item  nav-item-border"><a class="nav-link active"
                                href="{{ route('home.index') }}">@lang('site.home')</a></li>


                        {{-- @foreach (\App\Models\Category::all() as $b) --}}
                        <li class="nav-item nav-item-border relative ul1"><a class="nav-link "
                                href="{{ route('category.show', 1) }}">
                                sdfs
                                <i class="fa fa-angle-down" aria-hidden="true"></i>


                            </a>

                            <div class=" ul2  bg-w  text-dir ">


                                {{-- @if (\App\Models\Service::where('category_id', $b->id)->count() > 0)
                                    @foreach (\App\Models\Service::where('category_id', $b->id)->get() as $c) --}}
                                <a class="nav-link " href="{{ route('service.show', 1) }}">
                                    dcf
                                </a>
                                {{-- <hr class="mr-0"> --}}
                                {{-- @endforeach
                                @endif --}}

                            </div>

                        </li>
                        {{-- @endforeach --}}

                    </ul>

                </div>
            </nav>
            <div class=" align-self-center d-lg-block d-none">


                <button class="btn btn-primary">  اتصل بنا <i class="fa fa-phone" aria-hidden="true"></i>
                  </button>

            </div>

        </div>
    </div>

</div>
