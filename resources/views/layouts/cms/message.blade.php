<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
			@if (session('primary'))
			    <div class="alert alert-primary alert-dismissible fade show" role="alert">
			        {{ session('primary') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
			@if (session('secondary'))
			    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
			        {{ session('secondary') }}
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
			@if (session('danger'))
			    <div class="alert alert-danger alert-dismissible fade show" role="alert">
			        {{ session('danger') }}
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
			@if (session('warning'))
			    <div class="alert alert-warning alert-dismissible fade show" role="alert">
			        {{ session('warning') }}
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
			@if (session('info'))
			    <div class="alert alert-info alert-dismissible fade show" role="alert">
			        {{ session('info') }}
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
			@if (session('light'))
			    <div class="alert alert-light alert-dismissible fade show" role="alert">
			        {{ session('light') }}
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
			@if (session('dark'))
			    <div class="alert alert-dark alert-dismissible fade show" role="alert">
			        {{ session('dark') }}
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
			@if (session('success'))
			    <div class="alert alert-success alert-dismissible fade show" role="alert">
			        {{ session('success') }}
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			    </div>
			@endif
        </div>
    </div>
</div>
