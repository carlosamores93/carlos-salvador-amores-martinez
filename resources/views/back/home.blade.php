@extends('layouts.cms')

@section('head')
	<title>CMS</title>
    <meta name="description" content="">
    <link href="{{ asset('cms/assets/libs/flot/css/float-chart.css') }}"rel="stylesheet">
    <link href="{{ asset('cms/dist/css/style.min.css') }}"rel="stylesheet">
@endsection


@section('content')
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h1 class="card-title">Dasboard</h1>
                                <h2 class="card-subtitle">CMS</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
	<script src="{{ asset('cms/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('cms/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('cms/dist/js/waves.js') }}"></script>
    <script src="{{ asset('cms/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('cms/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('cms/dist/js/pages/chart/chart-page-init.js') }}"></script>
@endsection