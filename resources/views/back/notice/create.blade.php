@extends('layouts.cms')

@section('head')
	<title>Create notice</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms/assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms/assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link href="{{ asset('cms/dist/css/style.min.css') }}" rel="stylesheet">
@endsection


@section('content')
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" class="form-horizontal" action="{{ route('notice.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <h2 class="card-title">New notice</h2>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' class="form-control" id="email1" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                <div class="col-sm-9">
                                    <input type="text" name="subject" class="form-control" id="fname" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="form-control custom-control-input" id="customControlValidation1" name="status" value="1" required>
                                        <label class="custom-control-label" for="customControlValidation1">Active</label>
                                    </div>
                                     <div class="custom-control custom-radio">
                                        <input type="radio" class="form-control custom-control-input" id="customControlValidation2" name="status" value="0" required>
                                        <label class="custom-control-label" for="customControlValidation2">Inactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Repeat</label>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="form-control custom-control-input" id="customControlValidation11" name="repeat" value="1" required>
                                        <label class="custom-control-label" for="customControlValidation11">SI</label>
                                    </div>
                                     <div class="custom-control custom-radio">
                                        <input type="radio" class="form-control custom-control-input" id="customControlValidation22" name="repeat" value="0" required>
                                        <label class="custom-control-label" for="customControlValidation22">NO</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <textarea name="message" class="form-control ckeditor" id="editor1"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Date</label>
                                <div class="input-group col-sm-9">
                                    <input type="text" name="date" class="form-control mydatepicker" placeholder="yyyy-mm-dd 00:00:00">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <a href="{{ route('notice.index') }}" type="submit" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Store notice</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('cms/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('cms/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('cms/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('cms/dist/js/waves.js') }}"></script>
    <script src="{{ asset('cms/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('cms/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('cms/dist/js/pages/mask/mask.init.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script src="{{ asset('cms/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });

    </script>
@endsection