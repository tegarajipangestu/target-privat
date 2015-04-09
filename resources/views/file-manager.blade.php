@extends('app')

@section('content')
<!-- start: Content -->
	<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="halflings-icon white picture"></i><span class="break"></span>File Manager</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<i class="halflings-icon info-sign"></i> As its a demo, you currently have read-only permission, in your server you may do everything like, upload or delete. It will work on a server only.
			</div>
			<div class="file-manager"></div>
		</div>
	</div><!--/span-->
	</div><!--/row-->

@endsection