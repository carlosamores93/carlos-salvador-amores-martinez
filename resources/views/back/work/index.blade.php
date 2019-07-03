@extends('layouts.cms')

@section('head')
	<title>Works</title>
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
                        <h2 class="card-title">All works</h2>
                        <div class="table-responsive">
                            <table id="work_datatble" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Company</th>
                                        <th>Job</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Star date</th>
                                        <th>End date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach ($works as $w)
	                                    <tr>
	                                        <td>{{ $w->id }}</td>
	                                        <td>{{ $w->company }}</td>
	                                        <td>{{ $w->job }}</td>
	                                        <td>
                                                @if($w->status == 1)
                                                    <span class="badge badge-pill badge-primary">Active</span>
                                                @else
                                                    <span class="badge badge-pill badge-warning">Inactive</span>
                                                @endif
                                            </td>
	                                        <td>{!! $w->description !!}</td>
	                                        <td>{{ $w->start_date }}</td>
	                                        <td>{{ $w->end_date }}</td>
	                                        <td>
	                                        	<a class="btn btn-success" href="{{ route('work.edit', ['work' => $w->id]) }}">Edit</a>
	                                        	<form method="POST" action="{{ route('work.destroy', ['work' => $w->id]) }}">
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
                                        <th>Company</th>
                                        <th>Job</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Star date</th>
                                        <th>End date</th>
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
        $('#work_datatble').DataTable();
    </script>
@endsection