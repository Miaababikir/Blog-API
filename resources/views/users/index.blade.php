@extends('layouts.app')

@section('content')

    <h3 class="page-title"> تفاصيل المستخدمين</h3>


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-users"></i>كل المستخدمين
                    </div>
                    <div class="actions">
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> اضافة </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th> اسم المستخدم</th>
                                <th> البريد الالكتروني</th>
                                <th> الحالة</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td> {{ $user->id }}</td>
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }}</td>
                                    <td>
                                        <span class="label label-sm {{ $user->is_admin? "label-success" : "label-primary" }}"> {{ $user->is_admin? "Admin" : "User" }} </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn green-haze btn-sm sbold">
                                            <i class="fa fa-edit"></i> تعديل </a>
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
