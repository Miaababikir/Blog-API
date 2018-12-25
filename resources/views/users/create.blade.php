@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">  اضافة المستخدمين</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form" action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>الاسم</label>
                                <input type="text" class="form-control" name="name" placeholder="الاسم" required>
                            </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required>
                            </div>
                            <div class="form-group">
                                <label>كلمة المرور</label>
                                <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required>
                            </div>
                            <div class="form-group">
                                <label>نوع المستخدمن</label>
                                <select class="form-control" name="is_admin" required>
                                    <option value="1">ادمن</option>
                                    <option value="0">مستخدم عادي</option>
                                </select>
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
