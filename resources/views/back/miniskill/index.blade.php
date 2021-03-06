@extends('layouts.cms')

@section('head')
	<title>Miniskills</title>
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
                        <h2 class="card-title">All miniskills</h2>
                        <div class="table-responsive">
                            <table id="work_datatble" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Progress</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach ($miniskills as $ms)
	                                    <tr>
	                                        <td>{{ $ms->id }}</td>
	                                        <td>{{ $ms->title }}</td>
	                                        <td>
                                                @if($ms->status == 1)
                                                    <span class="badge badge-pill badge-primary">Active</span>
                                                @else
                                                    <span class="badge badge-pill badge-warning">Inactive</span>
                                                @endif
                                            </td>
	                                        <td>
                                                <div class="progress m-t-15">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-cyan" style="width:{{ $ms->progress }}%"></div>
                                                </div>
                                            </td>
	                                        <td>
	                                        	<a class="btn btn-success" href="{{ route('miniskill.edit', ['miniskill' => $ms->id]) }}">Edit</a>
	                                        	<form method="POST" onclick="return confirm('Do you want delete this item? Are you sure?')" action="{{ route('miniskill.destroy', ['miniskill' => $ms->id]) }}">
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
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Progress</th>
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