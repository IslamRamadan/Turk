
@extends('layouts.front.front')
@section('title')
    {{--    @lang("site.add_work")--}}

    {!! $my_section['about_title_'.app()->getLocale()] !!}

@endsection
@section('content')

<!-----start carousel --->
<div  class=" relative1 " >
    <div class="abs w-100">
        <h4 class="custom-h4">{!! $my_setting['about_'.app()->getLocale()] !!}</h4>
        <h1>{!! $my_section['about_title_'.app()->getLocale()] !!}</h1>

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
{{--
<div class="container text-center center-p col-md-6 col-sm-12">
    <br>
    <h4 class="mb-4">@lang('site.dry_i18')</h4>
    <h1>@lang('site.dry_i19')</h1>
    <p>@lang('site.dry_i20')</p>
    <br>
    {{-- <button class="btn btn-one">@lang('site.references') --}}
    {{-- </button>
    <br>
</div> --}}

<div class="container-fluid  mb-4">
    <br>

    <h2 class="text-center">@lang('site.dry_i4')<hr>
    </h2>
    <br>
    <div class="row align-items-center">
        @foreach (App\Models\ClientImg::all() as $item)
        <div class="col-lg-2 col-md-3 col-4">
            <img src="{{url($item->img)}}" alt="" style="
                width: -webkit-fill-available;
            ">
        </div>
        @endforeach

    </div>

</div>

<!--- -->
@endsection
