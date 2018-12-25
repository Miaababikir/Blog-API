@extends('layouts.app')


@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">الرئيسية</a>
            </li>
        </ul>
    </div>

    <h3 class="page-title"> الرئيسية
        <small>تفاصيل بيانات التطبيق</small>
    </h3>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="2000">2000</span>
                    </div>
                    <div class="desc"> Feedbacks</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="3000">3000</span></div>
                    <div class="desc"> Costumers</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="2500">2500</span>
                    </div>
                    <div class="desc"> Orders</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number"> +
                        <span data-counter="counterup" data-value="6000">6000</span></div>
                    <div class="desc"> Items</div>
                </div>
            </a>
        </div>
    </div>


@endsection

@section('scripts')

    <script src="{{ asset('vendor/js/moment.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/raphael.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/waypoints.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/counterup.js') }}" type="text/javascript"></script>

@endsection
