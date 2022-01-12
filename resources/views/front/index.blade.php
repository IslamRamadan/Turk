

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
            @foreach($sliders as $one)
            <div class="carousel-item  @if($i==0) active @endif ">
                <img class=" w-100  " src="{{asset($one->img)}}" alt="1 slide">

            </div>
                @php
                    $i ++;
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
    <div class="container-fluid  ">
        <div class="container text-center ">
            <br>

            <h2>@lang('site.how_works')
                <hr>

            </h2>
            <br>

            <div class="row  ">
                <div class="col-md-3">
                    @if(Lang::locale()=='ar')

                    <i class="{{$works[0]->icon}}  icon"></i>
                    <h3>{{$works[0]->title_ar}}</h3>
                    <p>{{$works[0]->content_ar}}
                    </p>
                    <br>
                    @else
                        <i class="{{$works[0]->icon}}  icon"></i>
                        <h3>{{$works[0]->title_en}}</h3>
                        <p>{{$works[0]->content_en}}
                        </p>
                        <br>
                        @endif

                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 pad-0 d-md-block d-none">
                            <br> <br> <br> <br>
                            <img src="{{asset('front/img/awro1.png')}}">
                        </div>
                        <div class="col-md-6 pad-0">
                            @if(Lang::locale()=='ar')

                                <i class="{{$works[1]->icon}}  icon"></i>
                                <h3>{{$works[1]->title_ar}}</h3>
                                <p>{{$works[1]->content_ar}}
                                </p>


                            @else
                                <i class="{{$works[1]->icon}}  icon"></i>
                                <h3>{{$works[1]->title_en}}</h3>
                                <p>{{$works[1]->content_en}}
                                </p>
                                @endif
                        </div>

                        <div class="col-md-3 pad-0 d-md-block d-none">
                            <br> <br> <br>
                            <img src="{{asset('front/img/awro2.png')}}"></div>
                    </div> <br></div>
                <div class="col-md-3">
                    @if(Lang::locale()=='ar')

                        <i class="{{$works[2]->icon}}  icon"></i>
                        <h3>{{$works[2]->title_ar}}</h3>
                        <p>{{$works[2]->content_ar}}
                        </p>
                        <br>

                    @else

                        <i class="{{$works[2]->icon}}  icon"></i>
                        <h3>{{$works[2]->title_en}}</h3>
                        <p>{{$works[2]->content_en}}
                        </p>
                        <br>
                        @endif
                </div>
            </div>
        </div>
    <!--- -->
    <div class="container-fluid text-center ">
        <br>
        <h2>    @lang('site.services')

            <hr>
        </h2> <br>
        <ul class="services-list pad-0">
            @foreach($my_sevices as $my_sevice)
            <li><a href="">
                    <img class="lazy" src="{{asset('front/img/cleaning.png')}}" >
                    <br>
                    @if(Lang::locale()=='ar')

                    {{$my_sevice->name_ar}}</a></li>
                    @else
                    {{$my_sevice->name_en}}</a></li>

                    @endif
           @endforeach
            <li><a href="{{route('my_services.index')}}">
                    <img class="lazy" src="{{asset('front/img/more.png')}}" ><br>
                    @lang('site.view_more')</a></li>
        </ul>
    </div>

    <!--- -->
    <div class="container text-center ">
        <br>
        <h2>@lang('site.why_works')
            <hr>
        </h2> <br>
        <div class="row text-left">
            @foreach($works as $work)

                @if(Lang::locale()=='ar')
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="row row3 pad">


                            <div class="col-3 ">
                                <br>
                                <i class="{{$work->icon}}  icon" ></i>
                            </div>
                            <div class="col-9 ">
                                <h3>{{$work->title_ar}}</h3>
                                <p>{{$work->content_ar}}
                                </p>
                            </div>

                        </div>

                    </div>

                @else

                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="row row3 pad">


                            <div class="col-3 ">
                                <br>
                                <i class="{{$work->icon}}  icon" ></i>
                            </div>
                            <div class="col-9 ">
                                <h3>{{$work->title_en}}</h3>
                                <p>{{$work->content_en}}
                                </p>
                            </div>

                        </div>

                    </div>

                @endif

            @endforeach

        </div>
    </div>

    <!--- -->
    <div class="container-fluid text-center">
        <br> <br> <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="circle">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <h2>100%</h2>
                    <p>@lang('site.quality')</p>
                    <br>  </div>

                <div class="col-md-4 col-6">
                    <div class="circle">
                        <i class="fas fa-user"></i>
                    </div>
                    <h2>100+</h2>
                    <p>@lang('site.employees')</p>
                    <br>  </div>

                <div class="col-md-4 col-12">
                    <div class="circle">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <h2>5+</h2>
                    <p><p>@lang('site.years_experience')</p></p>
                    <br>  </div>
            </div>


        </div>
    </div>
    <!--- -->





    <!-- country -->
    <div class="country ">

        <div class="relative">

            <video class="h-100 w-100 " autoplay controls muted>
                <source src="{{asset('front/vedio/monstroid.mp4')}}" type="video/mp4" >
            </video>
            <div class="abs-shop text-center">
                <button class=" btn bg-main close-country  "> @lang('site.continue')  </button>
            </div>

            <br> </div>

    </div>
    </div>





@endsection


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        {{--<script>--}}
            {{----}}
            {{----}}
            {{--$('img[data-enlargeable]').addClass('img-enlargeable').click(function() {--}}
                {{--var src = $(this).attr('src');--}}
                {{--var modal;--}}

                {{--function removeModal() {--}}
                    {{--modal.remove();--}}
                    {{--$('body').off('keyup.modal-close');--}}
                {{--}--}}
                {{--modal = $('<div>').css({--}}
                    {{--background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',--}}
                    {{--backgroundSize: 'contain',--}}
                    {{--width: '100%',--}}
                    {{--height: '100%',--}}
                    {{--position: 'fixed',--}}
                    {{--zIndex: '10000',--}}
                    {{--top: '0',--}}
                    {{--left: '0',--}}
                    {{--cursor: 'zoom-out'--}}
                {{--}).click(function() {--}}
                    {{--removeModal();--}}
                {{--}).appendTo('body');--}}
                {{--//handling ESC--}}
                {{--$('body').on('keyup.modal-close', function(e) {--}}
                    {{--if (e.key === 'Escape') {--}}
                        {{--removeModal();--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
        {{--</script>--}}
{{--<script>--}}
    {{--const image = document.querySelector(".clickable-image");--}}

    {{--image.addEventListener("click", function(){--}}
        {{--image.classList.add("image-open");--}}
    {{--})--}}
{{--</script>--}}

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
