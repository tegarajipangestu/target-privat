@extends('app')

@section('content')
	<div class="row-fluid sortable">
		<div class="box span12">
		  <div class="box-header" data-original-title>
			  <h2><i class="halflings-icon white calendar"></i><span class="break"></span>Calendar</h2>
		  </div>
		  <div class="box-content">
			<div id="external-events" class="span3 hidden-phone hidden-tablet">
				<h4>Draggable Events</h4>
				<div class="external-event badge">Default</div>
				<div class="external-event badge badge-success">Completed</div>
				<div class="external-event badge badge-warning">Warning</div>
				<div class="external-event badge badge-important">Important</div>
				<div class="external-event badge badge-info">Info</div>
				<div class="external-event badge badge-inverse">Other</div>
				<p>
				<label for="drop-remove"><input type="checkbox" id="drop-remove" /> remove after drop</label>
				</p>
				</div>

				<div id="calendar" class="span9"></div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div><!--/row-->
@endsection