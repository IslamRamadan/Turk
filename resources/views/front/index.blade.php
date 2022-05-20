@extends('layouts.front.front')
@section('title')
    @lang('site.home')
@endsection
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide relative" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @php
                $i = 0;
            @endphp
            @foreach ($sliders as $one)
                <div class="carousel-item  @if ($i == 0) active @endif ">
                    <img class=" w-100  " src="{{ asset($one->img) }}" alt="1 slide">

                </div>
                @php
                    $i++;
                @endphp
            @endforeach


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--- end head --->
    <!--- -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 p-2">
                <div class="rounded-img">
                    <img src="{{ asset('front/img/1.webp') }}" class="w-100" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12 align-self-center">
                <div class="">
                    <div class="text-center">
                        <h2>شركة نقل عفش بالمدينة المنورة 0545140796 ‏ أفضل سيارات مغلقه
                        </h2>
                        <br>
                        <h4>أنت تتحرك بينما نحن نتحرك لأجلك .</h4>
                        <br>
                        <button class="btn btn-primary">تعرف علي المزيد</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="">
                    <div class="shadow-box">
                        <div class="fast">
                            <h3 class="c-green">السرعة</h3>
                            <p>لدينا سيارات مجهزة وعمالة مدربة وجاهزون فى اى وقت للتحرك .</p>
                        </div>
                        <div class="fast-icon">
                            <img src="{{ asset('front/img/2.webp') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="">
                    <div class="shadow-box">
                        <div class="fast">
                            <h3 class="c-green">أفضل خدمة</h3>
                            <p>لدينا فريق دعم فني كامل لتلقى طلباتكم وإستفساراتكم . </p>
                        </div>
                        <div class="fast-icon">
                            <img src="{{ asset('front/img/3.webp') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="">
                    <div class="shadow-box">
                        <div class="fast">
                            <h3 class="c-green">أفضل سعر</h3>
                            <p>أفضل الأسعار ستحصل عليها مع شركة تبارك المدينة .</p>
                        </div>
                        <div class="fast-icon">
                            <img src="{{ asset('front/img/4.webp') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row justify-content-around align-items-center">
            <div class="col-md-4 col-12 text-center">
                <img src="{{ asset('front/img/5.webp') }}" class="w-80" alt="">
            </div>
            <div class="col-md-7 col-12 ">
                <div class="green-section">
                    <h2 class="mb-2">شركة نقل أثاث بالمدينة المنورة</h2>
                    <p>
                        شركة تبارك المدينة لنقل العفش والأثاث داخل وخارج المدينة المنورة ومن وإلى أى مكان فى المملكة العربية
                        السعوديه , لدينا اسطول من السيارات المجهزه والمغلقه لنقل الأثاث والحفاظ عليه من أى خدوش أو كسور
                        ولأننا نسعي إلى تقديم كل ما هو حديث ومفيد لعملاء شركة تبارك المدينة فأننا نوظف لدينا عمالة مدربة
                        وواعيه لتنفيذ الأعمال بإتقان وسرعة وإحترافيه ومهنية .
                    </p>
                    <div class="text-center">
                        <button class="btn btn-primary">تعرف علي المزيد</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 align-self-center">
                <div class="text-center">
                    <h1 class="c-green">شركائنا</h1>
                    <p>
                        شركاء نجاح شركة تبارك المدينة .
                    </p>
                </div>
            </div>
            <div class="col-md-8 col-12 ">
                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <div class="p-1">
                            <img src="{{ asset('front/img/6.webp') }}" width="150" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-12 text-center">
                        <div class="p-1">
                            <img src="{{ asset('front/img/7.webp') }}" width="150" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-12 text-center">
                        <div class="p-1">
                            <img src="{{ asset('front/img/8.webp') }}" width="150" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="post-img">
                    <img src="{{ asset('front/img/9.webp') }}" class="w-100" alt="">
                </div>
                <div class="post-content">
                    <a href="">
                        <h5>شركة عزل خزانات بالمدينه المنوره شركة تبارك 0545140796</h5>
                    </a>
                    <p>عزل خزانات بالمدينه المنوره شركة تبارك 0545140796 تقدم لك شركة عزل خزانات بالمدينه المنوره أفضل
                        الخدمات اللازم لك عزيزي العميل ، حيث أنها من أفضل

                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="post-img">
                    <img src="{{ asset('front/img/10.webp') }}" class="w-100" alt="">
                </div>
                <div class="post-content">
                    <a href="">
                        <h5>شركة عزل خزانات بالمدينه المنوره شركة تبارك 0545140796</h5>
                    </a>
                    <p>عزل خزانات بالمدينه المنوره شركة تبارك 0545140796 تقدم لك شركة عزل خزانات بالمدينه المنوره أفضل
                        الخدمات اللازم لك عزيزي العميل ، حيث أنها من أفضل

                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="post-img">
                    <img src="{{ asset('front/img/11.webp') }}" class="w-100" alt="">
                </div>
                <div class="post-content">
                    <a href="">
                        <h5>شركة عزل خزانات بالمدينه المنوره شركة تبارك 0545140796</h5>
                    </a>
                    <p>عزل خزانات بالمدينه المنوره شركة تبارك 0545140796 تقدم لك شركة عزل خزانات بالمدينه المنوره أفضل
                        الخدمات اللازم لك عزيزي العميل ، حيث أنها من أفضل

                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="post-img">
                    <img src="{{ asset('front/img/12.webp') }}" class="w-100" alt="">
                </div>
                <div class="post-content">
                    <a href="">
                        <h5>شركة عزل خزانات بالمدينه المنوره شركة تبارك 0545140796</h5>
                    </a>
                    <p>عزل خزانات بالمدينه المنوره شركة تبارك 0545140796 تقدم لك شركة عزل خزانات بالمدينه المنوره أفضل
                        الخدمات اللازم لك عزيزي العميل ، حيث أنها من أفضل

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
