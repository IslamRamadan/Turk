

@extends('layouts.front.front')
@section('title')

    @lang('site.all_products')

@endsection
@section('content')

  <div  class=" relative1 " >
    <div class="abs w-100">
        <h4 class="custom-h4">@lang('site.dry_i11')</h4>
        <h1>@lang('site.dry_i12')</h1>
       <h1>@lang('site.dry_i13')</h1>
    </div>
</div>
<div class="container text-center center-p">
    <br>

    <h4 class="mb-4">@lang('site.dry_i14')</h4>

    <h1>@lang('site.dry_i15')</h1>
    <p>@lang('site.carb')</p>
    <br>

</div>


<br>

<h4 class="custom-h4 mb-5" >@lang('site.dry_i16')
</h4>

<div class="container">


    <div class="row">
        @foreach ($products as $item)

        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <div class="" style="position: relative">
                <img src="{{url('/storage/'.$item->img)}}" alt="" class=" w-100 ">





                <div class="img-div4">
                    <div class="d-flex justify-content-between align-items-center">
                                    <h5>{!! $item['title_'.app()->getLocale()] !!}
                                    </h5>
                                <a href="{{route('product.show',$item->id)}}">
                                    <h6>
                                         @lang('site.view_more') &nbsp;  @if(Lang::locale()=='ar')
                                        <i class="fas fa-arrow-right text-light fa-flip-horizontal"></i>
                                        @else
                                        <i class="fas fa-arrow-right text-light "></i>
                                        @endif
                                    </h6>
                                </a>

                    </div>
                    </div>

            </div>

        </div>
        @endforeach

        {{-- <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <div class="" style="position: relative">
                <img src="{{url('front/img/25.webp')}}" alt="" class=" w-100 ">



                <div class="img-div4">
                    <div class="d-flex justify-content-between align-items-center">
                                    <h5>Styrofoam Box Products
                                    </h5>

                                    <a href="{{route('my_projects.index')}}">
                                        <h6>
                                            More &nbsp; &nbsp; <i class="fas fa-arrow-right text-light"></i>
                                        </h6>
                                    </a>

                    </div>
                    </div>

            </div>

        </div> --}}




    </div>

</div>

{{-- <div class="container-fluid">
    <br>

    <h4 class="custom-h4" >USAGE AREAS:
    </h4>

    <div class="row">
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Cold chain
        </div>
    </div>
    </div> --}}


@endsection
