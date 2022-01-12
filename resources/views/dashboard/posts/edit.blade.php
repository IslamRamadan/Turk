@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.edit_post")
@endsection
@section('mo')




@section('ti')
    @lang("site.edit_post")
@endsection

<div class="box box-primary">




    <div class="box-header">

    </div><!-- end of box header -->
    <div class="box-body">

        @include('partials._errors')


        {!! Form::model("", ['route' => ['posts.update',$post->id],
        "method"=>"PUT",'enctype' => 'multipart/form-data'

        ])!!}
        {{ csrf_field() }}

        <div class="form-group">
            <label>@lang('site.title_ar')</label>
            <input type="text" name="title_ar" class="form-control" value="{{$post->title_ar}}">
        </div>

        <div class="form-group">
            <label>@lang('site.title_en')</label>
            <input type="text" name="title_en" class="form-control" value="{{$post->title_en}}">
        </div>

        <div class="form-group">
            <label>@lang('site.content_ar')</label>
            <input type="text" name="content_ar" class="form-control" value="{{$post->content_ar}}">
        </div>

        <div class="form-group">
            <label>@lang('site.content_en')</label>
            <input type="text" name="content_en" class="form-control" value="{{$post->content_en}}">
        </div>



        <div class="form-group">
            <label>@lang('site.image')</label>
            <input type="file" name="photo" class="form-control" value="{{ $post->img }}">
        </div>







        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
        </div>

        {!! Form::close() !!}

    </div><!-- end of box body -->

</div><!-- end of box -->












@endsection
