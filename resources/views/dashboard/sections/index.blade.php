@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.sections")
@endsection
@section('mo')
    @include('flash::message')

@section('ti')
    @lang("site.sections")

@endsection


<div class="box box-primary">



    <div class="box-header with-border">





    </div><!-- end of box header -->



    <div class="box-body">

        @if ($section)

            <?php

            $id = $section->id;
            $title1_ar = $section->title1_ar;

            $title1_en = $section->title1_en;

            $name1_ar = $section->name1_ar;

            $name1_en = $section->name1_en;

            $content1_ar = $section->content1_ar;

            $content1_en = $section->content1_en;

            $title2_en = $section->title2_en;

            $title2_ar = $section->title2_ar;

            $content2_ar = $section->content2_ar;

            $content2_en = $section->content2_en;

            $title3_ar = $section->title3_ar;
            $title3_en = $section->title3_en;

            $name3_ar = $section->name3_ar;

            $name3_en = $section->name3_en;

            $content3_ar = $section->content3_ar;

            $content3_en = $section->content3_en;

            $blog_title_ar = $section->blog_title_ar;

            $blog_title_en = $section->blog_title_en;

            $last_name_ar = $section->last_name_ar;

            $last_name_en = $section->last_name_en;

            $last_title_en = $section->last_title_en;

            $last_title_ar = $section->last_title_ar;

            $last_content_en = $section->last_content_en;

            $last_content_ar = $section->last_content_ar;

            $img = $section->img;

            $contact_name_ar = $section->contact_name_ar;

            $contact_name_en = $section->contact_name_en;

            $contact_content_ar = $section->contact_content_ar;

            $contact_content_en = $section->contact_content_en;

            $qoute1_ar = $section->qoute1_ar;

            $qoute1_en = $section->qoute1_en;

            $qoute2_ar = $section->qoute2_ar;

            $qoute2_en = $section->qoute2_en;

            $product1_name_en = $section->product1_name_en;

            $product1_name_ar = $section->product1_name_ar;

            $product1_title_en = $section->product1_title_en;

            $product1_title_ar = $section->product1_title_ar;

            $product1_content_en = $section->product1_content_en;

            $product1_content_ar = $section->product1_content_ar;

            $products_title_en = $section->products_title_en;

            $products_title_ar = $section->products_title_ar;

            $posts_title_en = $section->posts_title_en;

            $posts_title_ar = $section->posts_title_ar;

            $about_title_en = $section->about_title_en;

            $about_title_ar = $section->about_title_ar;

            $contacts_title_en = $section->contacts_title_en;

            $contacts_title_ar = $section->contacts_title_ar;


            ?>

        @else
        <?php

        $id = '';
        $title1_ar = '';
        $title1_en = '';
        $name1_ar = '';
        $name1_en = '';
        $content1_ar = '';
        $content1_en = '';
        $title2_en = '';
        $title2_ar = '';
        $content2_ar = '';
        $content2_en = '';
        $title3_ar = '';
        $title3_en = '';
        $name3_ar = '';
        $name3_en = '';
        $content3_ar = '';
        $content3_en = '';
        $blog_title_en ='';
        $blog_title_ar ='';
        $last_name_ar = '';
        $last_name_en = '';
        $last_title_en = '';
        $last_title_ar = '';
        $last_content_en = '';
        $last_content_ar = '';
        $img = '';
        $contact_name_ar = '';
        $contact_name_en = '';
        $contact_content_ar = '';
        $contact_content_en = '';
        $qoute1_ar = '';
        $qoute1_en = '';
        $qoute2_ar = '';
        $qoute2_en = '';
        $product1_name_en = '';
        $product1_name_ar = '';
        $product1_title_en = '';
        $product1_title_ar = '';
        $product1_content_en = '';
        $product1_content_ar = '';
        $products_title_en = '';
        $products_title_ar = '';
        $posts_title_en = '';
        $posts_title_ar = '';
        $about_title_en = '';
        $about_title_ar = '';
        $contacts_title_en = '';
        $contacts_title_ar = '';



            ?>

        @endif
        {!! Form::model($section, ['route' => ['sections.update', $id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}
        {{-- <div class="form-group"> --}}
        {{-- <label>@lang("site.one_dollar")</label> --}}
        {{-- {!!  Form::text('dolar',$dolar,[ --}}
        {{-- "class"=>"form-control" --}}

        {{-- ])!!} --}}
        {{-- </div> --}}

        <div class="form-group text-center">
            <h2>@lang('site.home')</h2>
        </div>
        <div class="form-group">
            <label>@lang('site.title2_en')</label>
            <input class="form-control" name="title2_en" value="{{ $title2_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.title2_ar')</label>
            <input class="form-control" name="title2_ar" value="{{ $title2_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.content2_ar')</label>
            <textarea class="form-control" rows="10" name="content2_ar">
                          {{ $content2_ar }}
                       </textarea>
        </div>
        <div class="form-group">
            <label>@lang('site.content2_en')</label>
            <textarea class="form-control" rows="10" name="content2_en">
                          {{ $content2_en }}
                       </textarea>
        </div>
        <div class="form-group">
            <label>@lang('site.title1_ar')</label>
            <input class="form-control" name="title1_ar" value="{{ $title1_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.title1_en')</label>
            <input class="form-control" name="title1_en" value="{{ $title1_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.name1_ar')</label>
            <input class="form-control" name="name1_ar" value="{{ $name1_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.name1_en')</label>
            <input class="form-control" name="name1_en" value="{{ $name1_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.content1_ar')</label>
            <textarea class="form-control" rows="10" name="content1_ar">
                          {{ $content1_ar }}
                       </textarea>
        </div>
        <div class="form-group">
            <label>@lang('site.content1_en')</label>
            <textarea class="form-control" rows="10" name="content1_en">
                          {{ $content1_en }}
                       </textarea>
        </div>
        <div class="form-group">
            <label>@lang('site.title3_ar')</label>
            <input class="form-control" name="title3_ar" value="{{ $title3_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.title3_en')</label>
            <input class="form-control" name="title3_en" value="{{ $title3_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.name3_ar')</label>
            <input class="form-control" name="name3_ar" value="{{ $name3_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.name3_en')</label>
            <input class="form-control" name="name3_en" value="{{ $name3_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.content3_ar')</label>
            <textarea class="form-control" rows="10" name="content3_ar">
                          {{ $content3_ar }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.content3_en')</label>
            <textarea class="form-control" rows="10" name="content3_en">
                          {{ $content3_en }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.blog_title_en')</label>
            <input class="form-control" name="blog_title_en" value="{{ $blog_title_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.blog_title_ar')</label>
            <input class="form-control" name="blog_title_ar" value="{{ $blog_title_ar }}">
        </div>


              <div class="form-group">
            <label>@lang('site.last_title_ar')</label>
            <input class="form-control" name="last_title_ar" value="{{ $last_title_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.last_title_en')</label>
            <input class="form-control" name="last_title_en" value="{{ $last_title_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.last_name_ar')</label>
            <input class="form-control" name="last_name_ar" value="{{ $last_name_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.last_name_en')</label>
            <input class="form-control" name="last_name_en" value="{{ $last_name_en }}">
        </div>


        <div class="form-group">
            <label>@lang('site.last_content_ar')</label>
            <textarea class="form-control" rows="10" name="last_content_ar">
                          {{ $last_content_ar }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.last_content_en')</label>
            <textarea class="form-control" rows="10" name="last_content_en">
                          {{ $last_content_en }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.last_content_img')</label>
            <input type="file" class="form-control" name="logo">
        </div>
        {{-- <img src="{{ asset('/storage/' . $section->img) }}" alt="" width="50%"> --}}


        <div class="form-group">
            <label>@lang('site.contact_name_ar')</label>
            <input class="form-control" name="contact_name_ar" value="{{ $contact_name_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.contact_name_en')</label>
            <input class="form-control" name="contact_name_en" value="{{ $contact_name_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.contact_content_ar')</label>
            <textarea class="form-control" rows="10" name="contact_content_ar">
                          {{ $contact_content_ar }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.contact_content_en')</label>
            <textarea class="form-control" rows="10" name="contact_content_en">
                          {{ $contact_content_en }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.qoute1_ar')</label>
            <input class="form-control" name="qoute1_ar" value="{{ $qoute1_ar }}">
        </div>


        <div class="form-group">
            <label>@lang('site.qoute1_en')</label>
            <input class="form-control" name="qoute1_en" value="{{ $qoute1_en }}">
        </div>


        <div class="form-group">
            <label>@lang('site.qoute2_ar')</label>
            <input class="form-control" name="qoute2_ar" value="{{ $qoute2_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.qoute2_en')</label>
            <input class="form-control" name="qoute2_en" value="{{ $qoute2_en }}">
        </div>

        <div class="form-group text-center">
            <h2>@lang('site.products_page')</h2>
        </div>

        <div class="form-group">
            <label>@lang('site.products_title_ar')</label>
            <input class="form-control" name="products_title_ar" value="{{ $products_title_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.products_title_en')</label>
            <input class="form-control" name="products_title_en" value="{{ $products_title_en }}">
        </div>




        <div class="form-group">
            <label>@lang('site.product1_title_ar')</label>
            <input class="form-control" name="product1_title_ar" value="{{ $product1_title_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.product1_title_en')</label>
            <input class="form-control" name="product1_title_en" value="{{ $product1_title_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.product1_name_ar')</label>
            <input class="form-control" name="product1_name_ar" value="{{ $product1_name_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.product1_name_en')</label>
            <input class="form-control" name="product1_name_en" value="{{ $product1_name_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.product1_content_ar')</label>
            <textarea class="form-control" rows="10" name="product1_content_ar">
                          {{ $product1_content_ar }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.product1_content_en')</label>
            <textarea class="form-control" rows="10" name="product1_content_en">
                          {{ $product1_content_en }}
                       </textarea>
        </div>

        <div class="form-group text-center">
            <h2>@lang('site.posts_page')</h2>
        </div>

        <div class="form-group">
            <label>@lang('site.posts_title_ar')</label>
            <input class="form-control" name="posts_title_ar" value="{{ $posts_title_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.posts_title_en')</label>
            <input class="form-control" name="posts_title_en" value="{{ $posts_title_en }}">
        </div>

        <div class="form-group text-center">
            <h2>@lang('site.about_page')</h2>
        </div>

        <div class="form-group">
            <label>@lang('site.about_title_ar')</label>
            <input class="form-control" name="about_title_ar" value="{{ $about_title_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.about_title_en')</label>
            <input class="form-control" name="about_title_en" value="{{ $about_title_en }}">
        </div>

        <div class="form-group text-center">
            <h2>@lang('site.contacts_page')</h2>
        </div>

        <div class="form-group">
            <label>@lang('site.contacts_title_ar')</label>
            <input class="form-control" name="contacts_title_ar" value="{{ $contacts_title_ar }}">
        </div>

        <div class="form-group">
            <label>@lang('site.contacts_title_en')</label>
            <input class="form-control" name="contacts_title_en" value="{{ $contacts_title_en }}">
        </div>

















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
