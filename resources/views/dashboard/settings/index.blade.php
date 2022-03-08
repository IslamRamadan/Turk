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

            $about_app_ar = $setting->about_app_ar;
            $about_app_en = $setting->about_app_en;
            $strategy = $setting->strategy;
            $strategy_en = $setting->strategy_en;
            $product_en = $setting->product_en;
            $product_ar = $setting->product_ar;
            $blog_en = $setting->blog_en;
            $blog_ar = $setting->blog_ar;
            $home_en = $setting->home_en;
            $home_ar = $setting->home_ar;
            $contact_en = $setting->contact_en;
            $contact_ar = $setting->contact_ar;
            $about_en = $setting->about_en;
            $about_ar = $setting->about_ar;
            $currency = $setting->currency;
            $name = $setting->name;
            $name_en = $setting->name_en;

            $wats = $setting->wats;
            $yt_link = $setting->yt_link;
            $insta_link = $setting->insta_link;
            $tw_link = $setting->tw_link;
            $color2 = $setting->color2;
            $id = $setting->id;
            $dolar = $setting->dolar;
            $android = $setting->android;
            $ios = $setting->ios;
            $contact_phone = $setting->contact_phone;
            $address = $setting->address;
            $address_en = $setting->address_en;

            ?>

        @else

            <?php

            $id = '';
            $dolar = '';
            $contact_phone = '';
            $address = '';
            $address_en = '';
            $wats = '';
            $yt_link = '';
            $insta_link = '';
            $tw_link = '';
            $colo2r = '';
            $name = '';
            $name_ar = '';
            $product_en = '';
            $product_ar = '';
            $blog_en = '';
            $blog_ar = '';
            $home_en = '';
            $home_ar = '';
            $contact_en = '';
            $contact_ar = '';
            $about_en = '';
            $about_ar = '';

            $android = '';
            $ios = '';

            $about_app_ar = '';
            $about_app_en = '';
            $strategy = '';
            $strategy_en = '';
            $currency = '';

            ?>

        @endif
        {!! Form::model($setting, ['route' => ['settings.update', $id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}
        {{-- <div class="form-group"> --}}
        {{-- <label>@lang("site.one_dollar")</label> --}}
        {{-- {!!  Form::text('dolar',$dolar,[ --}}
        {{-- "class"=>"form-control" --}}

        {{-- ])!!} --}}
        {{-- </div> --}}
        <div class="form-group">
            <label>@lang('site.name_ar')</label>
            <input class="form-control" name="name" value="{{ $name }}">
        </div>
        <div class="form-group">
            <label>@lang('site.name_en')</label>
            <input class="form-control" name="name_en" value="{{ $name_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.product_ar')</label>
            <input class="form-control" name="product_ar" value="{{ $product_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.product_en')</label>
            <input class="form-control" name="product_en" value="{{ $product_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.blog_en')</label>
            <input class="form-control" name="blog_en" value="{{ $blog_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.blog_ar')</label>
            <input class="form-control" name="blog_ar" value="{{ $blog_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.contact_en')</label>
            <input class="form-control" name="contact_en" value="{{ $contact_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.contact_ar')</label>
            <input class="form-control" name="contact_ar" value="{{ $contact_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.home_en')</label>
            <input class="form-control" name="home_en" value="{{ $home_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.home_ar')</label>
            <input class="form-control" name="home_ar" value="{{ $home_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.about_en')</label>
            <input class="form-control" name="about_en" value="{{ $about_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.about_ar')</label>
            <input class="form-control" name="about_ar" value="{{ $about_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.logo')</label>
            <input type="file" class="form-control" name="logo">
        </div>
        <img src="{{ asset('/storage/' . $setting->logo) }}" alt="" width="50%">


        <div class="form-group">
            <label>@lang('site.address')</label>
            {!! Form::text('address', $address, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.address_en')</label>
            {!! Form::text('address_en', $address_en, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.contact_phone')</label>
            {!! Form::text('contact_phone', $contact_phone, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.wats')</label>
            {!! Form::text('wats', $wats, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.yt_link')</label>
            {!! Form::text('yt_link', $yt_link, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.tw_link')</label>
            {!! Form::text('tw_link', $tw_link, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.insta_link')</label>
            {!! Form::text('insta_link', $insta_link, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.tiktok_link')</label>
            {!! Form::text('android', $android, [
    'class' => 'form-control',
]) !!}
        </div>

        {{-- <div class="form-group"> --}}
        {{-- <label>@lang('site.color') --}}
        {{-- <span> @lang('site.choose_color')</span> --}}
        {{-- <a href="https://www.color-hex.com/color-names.html" target="_blank">@lang('site.here')</a> --}}
        {{-- </label> --}}
        {{-- {!!  Form::text('color',$wats,[ --}}
        {{-- "class"=>"form-control" --}}

        {{-- ])!!} --}}
        {{-- </div> --}}

        {{-- <div class="form-group"> --}}
        {{-- <label>@lang('site.sec_color') --}}
        {{-- <span>@lang('site.choose_color')</span> --}}
        {{-- <a href="https://www.color-hex.com/color-names.html" target="_blank">@lang('site.here')</a> --}}
        {{-- </label> --}}
        {{-- {!!  Form::text('color2',$wats2,[ --}}
        {{-- "class"=>"form-control" --}}

        {{-- ])!!} --}}
        {{-- </div> --}}

        {{-- <div class="form-group"> --}}
        {{-- <label>@lang('site.currency')</label> --}}
        {{-- {!!  Form::text('currency',$currency,[ --}}
        {{-- "class"=>"form-control" --}}

        {{-- ])!!} --}}
        {{-- </div> --}}


        {{-- <div class="form-group">
            <label>@lang('site.ggl_play')</label>
            {!! Form::text('android', $android, [
    'class' => 'form-control',
]) !!}
        </div>

        <div class="form-group">
            <label>@lang('site.app_store')</label>
            {!! Form::text('ios', $ios, [
    'class' => 'form-control',
]) !!}
        </div> --}}


        <div class="form-group">
            <label>@lang('site.about_app')</label>
            <textarea class="form-control" rows="10" name="about_app_ar">
                          {{ $about_app_ar }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.about_app_en')</label>
            <textarea id="summernote" class="form-control" rows="10" name="about_app_en">
                          {{ $about_app_en }}
                       </textarea>
        </div>


        {{-- <div class="form-group">
            <label>@lang("site.terms_and_condition")</label>
            <textarea class="form-control" rows="10" name="strategy">
                          {{ $strategy }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang("site.terms_and_condition_en")</label>
            <textarea class="form-control" rows="10" name="strategy_en">
                          {{ $strategy_en }}
                       </textarea>
        </div> --}}














        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.save')</button>
        </div>

        {!! Form::close() !!}



        <!-- Button trigger modal -->


    </div><!-- end of box body -->






</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('about_app_ar');
    CKEDITOR.replace('about_app_en');
</script>


@endsection
