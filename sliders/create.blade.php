@extends('layouts.dashboard.app2')
@section('title')
@lang("اضافة سليدر")
@endsection
@section('mo')
    



     @section('ti')
       اضافة سليدر
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model("", ['route' => ['sliders.store'],
                  "method"=>"post",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('اسم السليدر ')</label>
                        <input type="text" name="text" class="form-control" value="">
                    </div>


                    <div class="form-group">
                        <label>@lang('الصورة ')</label>
                        <input type="file" name="photo" class="form-control" value="">
                    </div>

                

                      

                        <div class="form-group">
                            <label>@lang('الحالة')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
                            <option  value="1">مفعلة</option>
                            <option value="0">معطلة</option>
                            
                        </select>
                        </div>

                       
                        <div class="form-group">
                            <label>@lang('ترتيب الظهور')</label>
                            <input value="" type="number" name="num" class="form-control" value="">
                        </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
