
@extends('layouts.front.front')
@section('title')
    {{--    @lang("site.add_work")--}}

    @lang('site.contact_us')

@endsection
@section('content')

<!-----start carousel --->
<div  class=" relative1 " >
    <div class="abs w-100">
        <h4 class="custom-h4">@lang('site.about_us')</h4>
        <h1>@lang('site.dry_i17')</h1>

    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-md-7 col-12 ">

<br>
{!! $my_setting['about_app_'.app()->getLocale()] !!}
        {{-- <div class="col-md-4 col-12 ">

<br>

<h4 class="custom-h4 mb-3 p-0 mt-3" >WHY DRY ICE CLEANING
</h4>
<h6><i class="fas fa-arrow-right main-color"></i> &nbsp; Machine Rental</h6>
<h6><i class="fas fa-arrow-right main-color"></i> &nbsp; Machine Rental</h6>
<h6><i class="fas fa-arrow-right main-color"></i> &nbsp; Machine Rental</h6>
<h6><i class="fas fa-arrow-right main-color"></i> &nbsp; Machine Rental</h6>
<h6><i class="fas fa-arrow-right main-color"></i> &nbsp; Machine Rental</h6>


        </div> --}}
    </div>
</div>

<div class="container text-center center-p col-md-6 col-sm-12">
    <br>
    <h4 class="mb-4">@lang('site.dry_i18')</h4>
    <h1>@lang('site.dry_i19')</h1>
    <p>@lang('site.dry_i20')</p>
    <br>
    {{-- <button class="btn btn-one">@lang('site.references') --}}
    </button>
    <br>
</div>

<div class="container-fluid mb-3">
    <br>

    <h2 class="text-center">@lang('site.dry_i4')
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
<!--- -->
@endsection
