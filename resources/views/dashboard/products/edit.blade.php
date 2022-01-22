@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.edit_product")
@endsection
@section('mo')




@section('ti')
    @lang("site.edit_product")
@endsection

<div class="box box-primary">




    <div class="box-header">

    </div><!-- end of box header -->
    <div class="box-body">

        @include('partials._errors')


        {!! Form::model("", ['route' => ['products.update.product',$product->id],
        "method"=>"POST",'enctype' => 'multipart/form-data'

        ])!!}
        {{ csrf_field() }}

        <div class="form-group">
            <input type="checkbox" class="form-check-input" name="appearance" value="1" id="exampleCheck1"
            @if ($product->appearance == 1)  {{ 'checked' }} @endif
            >
            <label class="form-check-label" for="exampleCheck1">@lang('site.appear')</label>
          </div>


        <div class="form-group">
            <label>@lang('site.title_ar')</label>
            <input type="text" name="title_ar" class="form-control" value="{{$product->title_ar}}">
        </div>

        <div class="form-group">
            <label>@lang('site.title_en')</label>
            <input type="text" name="title_en" class="form-control" value="{{$product->title_en}}">
        </div>

        <div class="form-group">
            <label>@lang('site.description_ar')</label>
            <textarea type="text" name="description_ar" class="form-control">
                {{$product->description_ar}}
            </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.description_en')</label>
            <textarea type="text" name="description_en" class="form-control" >
                {{$product->description_en}}
            </textarea>
        </div>



        <div class="form-group">
            <label>@lang('site.image')</label>
            <input type="file" name="photo" class="form-control" >
        </div>
        <input type="hidden" name="sections" value="{{count($sections)}}">
        @if (count($sections)>0)
            @foreach ($sections as $section )
            <h3 class="text-center">فقره </h3>
            <div class="form-group">
                <label>مجتوي الفقره بالعربيه</label>
                <textarea type="text" name="description_ar1[]" class="form-control" rows="10">
                    {{$section->description_ar}}
                </textarea>
            </div>

            <div class="form-group">
                <label>محتوي الفقره بالانجليزيه</label>
                <textarea type="text" name="description_en1[]" class="form-control" rows="10">
                    {{$section->description_en}}
                </textarea>
            </div>


            <div class="form-group">
                <label>الصوره</label>
                <input type="file" name="photo1[]" class="form-control" value="">
            </div>
            @endforeach
        @endif


        <div id="section">

        </div>


        <div class="form-group text-center">
            <button type="button" id="add_section" class="btn btn-success"><i class="fa fa-plus"></i> @lang('site.add_section')</button>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
        </div>

        {!! Form::close() !!}

    </div><!-- end of box body -->

</div><!-- end of box -->












<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description_ar' );
    CKEDITOR.replace( 'description_en' );
    $("#add_section").click(function (e) {
            e.preventDefault();
            // get gov
            // send ajax



                $.ajax({
                    url : "{{ route('add.section') }}",
                    type: 'post',
                    data: {_token:"{{csrf_token()}}"},
                    success: function (data) {
                        console.log(data);
                        $("#section").append(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) { // error callback
                        alert(jqXhr);
                    }
                });

        });
</script>



@endsection
