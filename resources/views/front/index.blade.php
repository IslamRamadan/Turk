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

    <div class="container text-center center-p">
        <br>

        <h1>To your business

        </h1>
        <h1>we produce special solutions

        </h1><br>

    </div>
    <div  class="container-fluid" >

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/4.webp')}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>Dry ice</h5>
                        <h6>Dry ice</h6>
                        <p>
                            Dry ice is the name given to the solid state of carbon dioxide. found in Earth's atmosphere
                        </p>
                        <a href="{{route('my_projects.index')}}" class="hide-link">
                            <p>More &nbsp; <i class="fas fa-arrow-right text-light"></i></p>
                        </a>


                        </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/3.webp')}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>Dry ice</h5>
                        <h6>Dry ice</h6>
                        <p>
                            Dry ice is the name given to the solid state of carbon dioxide. found in Earth's atmosphere
                        </p>
                        <a href="{{route('my_projects.index')}}" class="hide-link">
                            <p>More &nbsp; <i class="fas fa-arrow-right text-light"></i></p>
                        </a>


                        </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/1.webp')}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>Dry ice</h5>
                        <h6>Dry ice</h6>
                        <p>
                            Dry ice is the name given to the solid state of carbon dioxide. found in Earth's atmosphere
                        </p>
                        <a href="{{route('my_projects.index')}}" class="hide-link">
                            <p>More &nbsp; <i class="fas fa-arrow-right text-light"></i></p>
                        </a>


                        </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 hvr">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/2.webp')}}" alt="" class="w-100">
                    <div class="img-div" >
                        <h5>Dry ice</h5>
                        <h6>Dry ice</h6>
                        <p>
                            Dry ice is the name given to the solid state of carbon dioxide. found in Earth's atmosphere
                        </p>
                        <a href="{{route('my_projects.index')}}" class="hide-link">
                            <p>More &nbsp; <i class="fas fa-arrow-right text-light"></i></p>
                        </a>


                        </div>

                </div>

            </div>


        </div>
    </div>
    <div class="container text-center center-p">
        <br>

        <h4 class="mb-4">DRY ICE TECHNOLOGIES:</h4>
        <h1>To your business</h1>
        <h1>we produce special solutions
        </h1>
        <p>Carbon; meets your dry ice and dry ice cleaning service needs on time and saves you and your business time.
        </p>
        <br>

    </div>

    <div  class="container-fluid" >

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/5.webp')}}" alt="" class="w-100 bright-50">
                    <div class="img-div1" >
                        <h2>Dry ice</h2>



                        </div>
                    <div class="img-div2" >
                        <h5>Dry Ice Products</h5>

                        </div>

                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="" style="position: relative">
                    <img src="{{url('front/img/6.webp')}}" alt="" class="w-100 bright-50">
                    <div class="img-div1" >
                        <h2>Dry Ice Technologies</h2>



                        </div>
                    <div class="img-div2" >
                        <h5>Dry Ice Cleaning System</h5>

                        </div>

                </div>

            </div>




        </div>
    </div>

    <div class="container text-center center-p1">

<div class="component">
    <blockquote class="callout quote EN">
       <h2> We produce customized solutions for your business
       </h2>
       </blockquote>
    </div>
    </div>



            <div  class="container-fluid" >

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="" style="position: relative">
                            <img src="{{url('front/img/7.webp')}}" alt="" class="w-100">
                            <div class="text-center">
                                <a href="{{route('my_projects.index')}}" class="btn btn-primary m-5">More &nbsp; &nbsp; <i class="fas fa-arrow-right text-light"></i>
                                </a>
                                     </div>

                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="" style="position: relative">
                            <img src="{{url('front/img/8.webp')}}" alt="" class="w-100">
                            <div class="text-center">
                                <a href="{{route('my_projects.index')}}" class="btn btn-primary m-5">More &nbsp; &nbsp; <i class="fas fa-arrow-right text-light"></i>
                                </a>
                                     </div>


                        </div>

                    </div>




                </div>
            </div>

            <div class="container text-center center-p ">
                <br>
                <h4 class="mb-4">DRY ICE PRODUCTS AND SERVICES:</h4>
                <h1>An environmentally friendly and fast cleaning system</h1>
                <p>Dry ice cleaning is the cleaning system of today and tomorrow. This system, which is not harmful to the environment and nature, adds time and profit value to your business.
                </p>
                <br>
                <button class="btn btn-one">References
                </button>
                <br>
            </div>

            <div class="container-fluid  ">
                <br>

                <h2 class="text-center">In Turkey dozens of businesses rely on us
                    <hr>
                </h2>
                <br>
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/9.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/10.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/11.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/12.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 ">
                        <img src="{{url('front/img/13.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/14.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/15.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/12.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/11.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/16.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/10.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{url('front/img/9.webp')}}" alt="" style="
    width: -webkit-fill-available;
">
                    </div>
                </div>

            </div>

            <div class="container text-center center-p1">

                <div class="component">
                    <blockquote class="callout quote EN">
                       <h2> We serve all of Turkey
                       </h2>
                       </blockquote>
                    </div>
                    </div>



    <div class="container-fluid">
        <br>

        <h4 class="custom-h4" >OUR DRY ICE SERVICE AND SUPPLY CHANNELS:
        </h4>

        <div class="row">


            <div class="col-md-3 col-12 align-self-center">
                <h3 class="mb-5">We serve all of Turkey</h3>
                <p>It is important for us to provide solutions to the needs of our customers. We carry quality and service all over our country. We aim for faster solutions for you.</p>
            </div>
            <div class="col-md-9 col-12">
                <img src="{{url('front/img/17.webp')}}" alt="" class="w-100">
            </div>

        </div>
    </div>

    <div class="container-fluid contact-container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 col-12 mt-sm-3">
                <h1>Let's answer your questions!</h1>
                <h1>Let's determine your need together!
                </h1>
                <br>
                <br>
                <p>Please contact us for dry ice cleaning, use of dry ice for food, dry ice and cold chain processes and styrofoam products you need.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 cus-form">
                <div class="form">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text"  class="form-control" name="name"   placeholder="@lang('site.name')" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text"  class="form-control" name="phone"   placeholder="@lang('site.phone')" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        </label>
                        <div class="col-sm-12">
                            <input type="text"  class="form-control" name="email"   placeholder="@lang('site.email')" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea  rows="3" name="comment" placeholder="Write message here..."  class="form-control"  ></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary " >submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- <script> --}}
{{--  --}}
{{--  --}}
{{-- $('img[data-enlargeable]').addClass('img-enlargeable').click(function() { --}}
{{-- var src = $(this).attr('src'); --}}
{{-- var modal; --}}

{{-- function removeModal() { --}}
{{-- modal.remove(); --}}
{{-- $('body').off('keyup.modal-close'); --}}
{{-- } --}}
{{-- modal = $('<div>').css({ --}}
{{-- background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center', --}}
{{-- backgroundSize: 'contain', --}}
{{-- width: '100%', --}}
{{-- height: '100%', --}}
{{-- position: 'fixed', --}}
{{-- zIndex: '10000', --}}
{{-- top: '0', --}}
{{-- left: '0', --}}
{{-- cursor: 'zoom-out' --}}
{{-- }).click(function() { --}}
{{-- removeModal(); --}}
{{-- }).appendTo('body'); --}}
{{-- //handling ESC --}}
{{-- $('body').on('keyup.modal-close', function(e) { --}}
{{-- if (e.key === 'Escape') { --}}
{{-- removeModal(); --}}
{{-- } --}}
{{-- }); --}}
{{-- }); --}}
{{-- </script> --}}
{{-- <script> --}}
{{-- const image = document.querySelector(".clickable-image"); --}}

{{-- image.addEventListener("click", function(){ --}}
{{-- image.classList.add("image-open"); --}}
{{-- }) --}}
{{-- </script> --}}

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
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
