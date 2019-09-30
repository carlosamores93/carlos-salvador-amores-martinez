@extends('layouts.cms')

@section('head')
	<title>Notices</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms/assets/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('cms/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('cms/dist/css/style.min.css') }}" rel="stylesheet">
@endsection


@section('content')
	<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">All notices</h2>
                        <div class="table-responsive">
                            <table id="notice_datatble" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Repeat</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach ($notices as $w)
	                                    <tr>
	                                        <td>{{ $w->id }}</td>
                                            <td>{{ $w->name }}</td>
	                                        <td>{{ $w->subject }}</td>
	                                        <td>{!! $w->message !!}</td>
	                                        <td>
                                                @if($w->status == 1)
                                                    <span class="badge badge-pill badge-primary">Active</span>
                                                @else
                                                    <span class="badge badge-pill badge-warning">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($w->repeat == 1)
                                                    <span class="badge badge-pill badge-primary">SI</span>
                                                @else
                                                    <span class="badge badge-pill badge-warning">NO</span>
                                                @endif
                                            </td>
	                                        <td>{{ $w->date }}</td>
	                                        <td>
	                                        	<a class="btn btn-success" href="{{ route('notice.edit', $w->id) }}">Edit</a>
	                                        	<form method="POST" onclick="return confirm('Do you want delete this item? Are you sure?')" action="{{ route('notice.destroy', $w->id) }}">
													@csrf
													@method('DELETE')
	                                        		<button type="submit" class="btn btn-danger">Delete</button>
	                                        	</form>
	                                        </td>
	                                    </tr>
                                	@endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Repeat</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
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
    <script src="{{ asset('cms/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('cms/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('cms/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        $('#notice_datatble').DataTable();
    </script>
@endsection