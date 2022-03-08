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
            <div class="col-lg-9 col-md-7">

                <a href="{{route('home.index')}}">@lang('site.home')</a>
                <a href="{{route('about.index')}}">@lang('site.about_us')</a>
                <a href="{{route('contacts.index')}}">@lang('site.contact_us')</a>
                {{-- <a href="{{route('terms')}}">@lang('site.terms_and_condition')</a> --}}
                {{--<a href="html/contect.html">@lang('site.')FAQ</a>--}}
                {{--<a href="html/contect.html">@lang('site.')PRIVACY</a>--}}

            </div>

            <div class="col-lg-3 col-md-5">
                <nav class="navbar navbar-expand pad-0 ">
                    <ul class="navbar-nav mr-auto ">

                        @if ($my_setting->insta_link)
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->insta_link}}" title="instagram"><i class="fab fa-instagram"></i>  </a></li>
                        @endif
                        @if ($my_setting->tw_link)
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->tw_link}}" title="twitter"><i class="fab fa-twitter"></i>  </a></li>
                        @endif
                        @if ($my_setting->contact_phone)
                        <li class="nav-item "><a class="nav-link " href="tel:{{$my_setting->contact_phone}}" title="call us"><i class="fas fa-phone"></i>  </a></li>
                        @endif
                        @if ($my_setting->yt_link)
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->yt_link}}" title="youtube"><i class="fab fa-youtube"></i>  </a></li>
                        @endif
                        @if ($my_setting->android)
                        <li class="nav-item "><a class="nav-link " href="{{$my_setting->android}}" title="tiktok"><img src="{{asset('front/img/tiktok.png')}}" width="25px" alt="">  </a></li>
                        @endif

                    </ul>

                </nav>
            </div>
            <p class="col-12 text-center"><br><br>All rights reserved © 2022 | This template is made by <a href="#" class="">{!! $my_setting['name_en'] !!}</a></p>

        </div>

    </div>

</footer>







<a href="https://wa.me/{{$my_setting->wats}}">
    <img src="{{asset('front/img/whatsapp.svg')}}" class="whatsapp shadow">
</a>






<!-- Trigger the Modal -->

    <!-- The Modal -->
    <div id="myModal11" class="modal11">

        <!-- The Close Button -->
        <span class="close11">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content11" id="img0111">

        <!-- Modal Caption (Image Text) -->
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {


        // Get the modal
        var modal = document.getElementById("myModal11");
        var img = $('#myImg').val()
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        // var img = document.getElementById("myImg");
        // var img = document.getElementsByClassName("myImg");
        console.log(`Hello`);
        console.log(img);
        var modalImg = document.getElementById("img0111");

        $(".img-modal").click(function() {
            console.log('click on img');
            modal.style.display = "block";
            modalImg.src = this.src;
        });
        $("#hhh").click(function() {
            console.log('click on img');

        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close11")[0];

        // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }
        $(span).click(function() {
            modal.style.display = "none";

        });
    });
</script>









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
