@extends('layouts.cms')

@section('head')
	<title>Edit profile</title>
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
                    <form method="POST" class="form-horizontal" action="{{ route('cms-profile-update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <h2 class="card-title">Edit profile</h2>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' class="form-control" id="email1" placeholder="Name" value="{{ Auth::user()->name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Lastname</label>
                                <div class="col-sm-9">
                                    <input type="text" name='lastname' class="form-control" id="email1" placeholder="Lastname" value="{{ Auth::user()->lastname }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name='email' class="form-control" id="email1" placeholder="Email" value="{{ Auth::user()->email }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" name='phone' class="form-control" id="email1" placeholder="Phone" value="{{ Auth::user()->phone }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Career</label>
                                <div class="col-sm-9">
                                    <input type="text" name='career' class="form-control" id="email1" placeholder="Career" value="{{ Auth::user()->career }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Profession</label>
                                <div class="col-sm-9">
                                    <input type="text" name='profession' class="form-control" id="email1" placeholder="Profession" value="{{ Auth::user()->profession }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">University</label>
                                <div class="col-sm-9">
                                    <input type="text" name='university' class="form-control" id="email1" placeholder="University" value="{{ Auth::user()->university }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Faculty</label>
                                <div class="col-sm-9">
                                    <input type="text" name='faculty' class="form-control" id="email1" placeholder="Faculty" value="{{ Auth::user()->faculty }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" name='address' class="form-control" id="email1" placeholder="Address" value="{{ Auth::user()->address }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Github</label>
                                <div class="col-sm-9">
                                    <input type="text" name='github' class="form-control" id="email1" placeholder="Github" value="{{ Auth::user()->github }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Gitlab</label>
                                <div class="col-sm-9">
                                    <input type="text" name='gitlab' class="form-control" id="email1" placeholder="Gitlab" value="{{ Auth::user()->gitlab }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Linkedin</label>
                                <div class="col-sm-9">
                                    <input type="text" name='linkedin' class="form-control" id="email1" placeholder="Linkedin" value="{{ Auth::user()->linkedin }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Website</label>
                                <div class="col-sm-9">
                                    <input type="text" name='website' class="form-control" id="email1" placeholder="Website" value="{{ Auth::user()->website }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 text-right control-label col-form-label">Photo</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose photo profile...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <img class="img-rounded" src="{{ asset('img/' . str_slug(Auth::user()->name) . '-' . str_slug(Auth::user()->lastname) . '.jpg') }}" style="padding-top:  5px;max-width: 200px;">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 text-right control-label col-form-label">CV</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" name="cv" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose cv...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control ckeditor" id="editor1">{!! Auth::user()->description !!}</textarea>
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <a href="{{ route('cms-home') }}" type="submit" class="btn btn-danger">CMS</a>
                                <button type="submit" class="btn btn-primary">Update profile</button>
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