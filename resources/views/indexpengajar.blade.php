@extends('app')

@section('content')
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Pengajar</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Id Pengajar</th>
					  <th>Nama Lengkap</th>
					  <th>Alamat</th>
					  <th>Kontak</th>
					  <th>Matkul</th>
					  <th>Status</th>
					  <th>Action</th>
				  </tr>
			  </thead>   
			  <tbody>
				@foreach ($pengajars as $pengajar)
				<tr>
					<td>{{$pengajar->id_pengajar}}</td>
					<td>{{$pengajar->nama}}</td>
					<td class="center">{{$pengajar->alamat}}</td>
					<td class="center">{{$pengajar->kontak}}</td>
					<td class="center">{{$pengajar->matkul}}</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="open-showPengajar btn btn-success" data-toggle="modal" href="#showPengajarDetails" data-id="{{$pengajar->id_pengajar}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="#">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				@endforeach
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
<div class="modal hide" id="showPengajarDetails">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Data Pengajar</h3>
	</div>
	<div class="modal-body">
		<p id="pengajarId">Tes</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Close</a>
		<a href="#" class="btn btn-primary">Save changes</a>
	</div>
</div>
<script>
	$(document).on("click", ".open-showPengajar", function () {
	 var myBookId = $(this).data('id');
	 console.log('Huba');
	 console.log(myBookId);
	 $(".modal-body #pengajarId").html(myBookId);
});
// $('#showPengajarDetails').on('show.bs.modal', function(e) {
//     console.log(e.relatedTarget.dataset.id);
// });
</script>

@endsection
