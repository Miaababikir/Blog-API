@extends('layouts.app')

@section('content')

    <h3 class="page-title"> تفاصيل المستخدمين</h3>


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-paper-plane"></i>كل المنشورات
                    </div>
                    <div class="actions">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> اضافة </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th> الناشر</th>
                                <th> العنوان</th>
                                <th> الموضوع</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td> {{ $post->id }}</td>
                                    <td> {{ $post->creator->name }}</td>
                                    <td> {{ $post->title }}</td>
                                    <td> {{ $post->body }}</td>
                                    <td>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn green-haze btn-sm sbold">
                                            <i class="fa fa-edit"></i> تعديل </a>
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn green-haze btn-sm sbold">
                                            <i class="fa fa-share"></i> عرض </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection
