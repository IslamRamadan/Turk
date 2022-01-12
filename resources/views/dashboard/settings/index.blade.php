@extends('layouts.dashboard.app2')
@section('title')
@lang("site.settings")
@endsection
@section('mo')
@include('flash::message')

    @section('ti')
    @lang("site.settings")

@endsection


        <div class="box box-primary">



            <div class="box-header with-border">





            </div><!-- end of box header -->



            <div class="box-body">

             @if ($setting)

                    <?php
                  
                  $about_app=$setting->about_app;
                   $about_app_en=$setting->about_app_en;
                    $strategy=$setting->strategy;
                   $strategy_en=$setting->strategy_en;
                  $currency=$setting->currency;

                    
                      $color=$setting->color;
                      $color2=$setting->color2;
                    $id = $setting->id;
			     	$dolar=$setting->dolar	;
			     	$android=$setting->android	;
			     	$ios=$setting->ios	;
			     	$contact_phone= $setting->contact_phone	;
                   
                     ?>

             @else

                    <?php
                    
                   
                    $id = "";
					$dolar= ""	;
			        $contact_phone= ""	;
			        $color= ""	;
			        $colo2r="";
			        $android= ""	;
			        $ios= ""	;


                  $about_app= "";
                   $about_app_en= "";
                    $strategy= "";
                   $strategy_en= "";
                  $currency= "";

                      ?>

             @endif
                {!! Form::model($setting, ['route' => ['settings.update',$id],
                "method"=>"post",
                "enctype"=>"multipart/form-data"

                ])!!}
                  {{ csrf_field() }}
                  {{--<div class="form-group">--}}
                    {{--<label>@lang("site.one_dollar")</label>--}}
                  {{--{!!  Form::text('dolar',$dolar,[--}}
                  {{--"class"=>"form-control"--}}

                  {{--])!!}--}}
                {{--</div>--}}
                 <div class="form-group">
                        <label>@lang('site.contact_phone')</label>
                      {!!  Form::text('contact_phone',$contact_phone,[
                    "class"=>"form-control"

                      ])!!}
                    </div>
                    
                     {{--<div class="form-group">--}}
                        {{--<label>@lang('site.color')--}}
                        {{--<span> @lang('site.choose_color')</span>--}}
                       {{--<a href="https://www.color-hex.com/color-names.html" target="_blank">@lang('site.here')</a>--}}
                        {{--</label>--}}
                      {{--{!!  Form::text('color',$color,[--}}
                    {{--"class"=>"form-control"--}}

                      {{--])!!}--}}
                    {{--</div>--}}
                    
                     {{--<div class="form-group">--}}
                        {{--<label>@lang('site.sec_color')--}}
                        {{--<span>@lang('site.choose_color')</span>--}}
                       {{--<a href="https://www.color-hex.com/color-names.html" target="_blank">@lang('site.here')</a>--}}
                        {{--</label>--}}
                      {{--{!!  Form::text('color2',$color2,[--}}
                    {{--"class"=>"form-control"--}}

                      {{--])!!}--}}
                    {{--</div>--}}
                    
                     {{--<div class="form-group">--}}
                        {{--<label>@lang('site.currency')</label>--}}
                      {{--{!!  Form::text('currency',$currency,[--}}
                    {{--"class"=>"form-control"--}}

                      {{--])!!}--}}
                    {{--</div>--}}
                    
                    
                     <div class="form-group">
                        <label>@lang('site.ggl_play')</label>
                      {!!  Form::text('android',$android,[
                    "class"=>"form-control"

                      ])!!}
                    </div>
                    
                     <div class="form-group">
                        <label>@lang('site.app_store')</label>
                      {!!  Form::text('ios',$ios,[
                    "class"=>"form-control"

                      ])!!}
                    </div>
                    
                    
                    <div class="form-group">
                         <label>@lang('site.about_app')</label>
                       <textarea  class="form-control" rows="10"  name="about_app">
                          {{$about_app}}
                       </textarea >
                    </div>
                    
                     <div class="form-group">
                         <label>@lang('site.about_app_en')</label>
                       <textarea  class="form-control" rows="10"  name="about_app_en">
                          {{$about_app_en}}
                       </textarea >
                    </div>
                    
                    
                     <div class="form-group">
                         <label>@lang("site.terms_and_condition")</label>
                       <textarea  class="form-control" rows="10"  name="strategy">
                          {{$strategy}}
                       </textarea >
                    </div>
                    
                     <div class="form-group">
                         <label>@lang("site.terms_and_condition_en")</label>
                       <textarea  class="form-control" rows="10"  name="strategy_en">
                          {{$strategy_en}}
                       </textarea >
                    </div>
                    
                    
                    
                
                

         


                    

                  


                  <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.save')</button>
                  </div>

                  {!! Form::close() !!}



                    <!-- Button trigger modal -->


            </div><!-- end of box body -->






        </div>






  

@endsection
