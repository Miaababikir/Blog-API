@extends('layouts.login')

@section('content')


    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <img src="../assets/pages/img/logo-big-white.png" style="height: 17px;" alt=""/>
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-title">
                <span class="form-title">مرحبا.</span>
                <span class="form-subtitle">قم بتسجيل دخولك.</span>
            </div>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> قم بادخال البريد الالكتروني و كلمة المرور. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="text"
                       placeholder="البريد الالكتروني" name="email"/></div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password"
                       placeholder="كلمة المرور" name="password"/></div>
            <div class="form-actions">
                <button type="submit" class="btn red btn-block uppercase">دخول</button>
            </div>
        </form>
        <!-- END LOGIN FORM -->
    </div>
@endsection
