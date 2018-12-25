@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">  تعديل المستخدمين</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form" action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-body">
                            <div class="form-group">
                                <label>الاسم</label>
                                <input type="text" class="form-control" name="name" placeholder="الاسم" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label>كلمة المرور</label>
                                <input type="password" class="form-control" name="password" placeholder="كلمة المرور">
                            </div>
                            <div class="form-group">
                                <label>نوع المستخدمن</label>
                                <select class="form-control" name="is_admin" required>
                                    <option value="1" {{ $user->is_admin == '1'? "selected" : "" }}>ادمن</option>
                                    <option value="0" {{ $user->is_admin == '0'? "selected" : "" }}>مستخدم عادي</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block blue">تعديل</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>


@endsection
