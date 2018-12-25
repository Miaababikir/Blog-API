@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">  اضافة منشور</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>العنوان</label>
                                <input type="text" class="form-control" name="title" placeholder="الاسم" required>
                            </div>
                            <div class="form-group">
                                <label>الموضوع</label>
                                <textarea class="form-control" name="body" rows="8" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>الصور</label>
                                <input type="file" class="form-control" name="photos[]" multiple>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block blue">اضافة</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>


@endsection
