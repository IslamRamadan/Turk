<footer class="container-fluid bg-main">
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-12">
                {{-- <h2> @if (app()->getLocale() == 'en')
                    {{ $my_setting->name_en }}
                @else
                    {{ $my_setting->name }}
                @endif
</h2> --}}
                <p>

                @if (app()->getLocale() == 'en')
                    {{ $my_setting->address_en }}
                @else
                    {{ $my_setting->address }}
                @endif
                </p>
            </div>
            <div class="col-md-9">

                <a href="{{route('home.index')}}">@lang('site.home')</a>
                <a href="{{route('about.index')}}">@lang('site.about_us')</a>
                <a href="{{route('contacts.index')}}">@lang('site.contact_us')</a>
                {{-- <a href="{{route('terms')}}">@lang('site.terms_and_condition')</a> --}}
                {{--<a href="html/contect.html">@lang('site.')FAQ</a>--}}
                {{--<a href="html/contect.html">@lang('site.')PRIVACY</a>--}}

            </div>

            <div class="col-md-3">
                <nav class="navbar navbar-expand pad-0 ">
                    <ul class="navbar-nav mr-auto ">


                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->insta_link}}" title="instagram"><i class="fab fa-instagram"></i>  </a></li>
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->tw_link}}" title="twitter"><i class="fab fa-twitter"></i>  </a></li>
                        <li class="nav-item "><a class="nav-link " href="tel:{{$my_setting->contact_phone}}" title="call us"><i class="fas fa-phone"></i>  </a></li>
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->yt_link}}" title="youtube"><i class="fab fa-youtube"></i>  </a></li>

                    </ul>

                </nav>
            </div>
            <p class="col-12 text-center"><br><br>All rights reserved © 2022 | This template is made by <a href="https://bluezonekw.com/" target="_blank" class="">blue zone</a></p>

        </div>

    </div>

</footer>







<a href="https://wa.me/{{$my_setting->wats}}">
    <img src="{{asset('front/img/whatsapp.svg')}}" class="whatsapp shadow">
</a>














<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/all.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('front/js/main-js.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('front/js/counterup.min.js')}}"></script>

</body>

</html>
