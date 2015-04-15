@extends('app')

@section('content')
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Murid</h2>
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
					  <th>Id Murid</th>
					  <th>Nama Lengkap</th>
					  <th>Alamat</th>
					  <th>Kontak</th>
					  <th>Matkul</th>
					  <th>Status</th>
					  <th>Action</th>
				  </tr>
			  </thead>   
			  <tbody>
				@foreach ($murids as $murid)
				<tr>
					<td>{{$murid->id_murid}}</td>
					<td>{{$murid->nama_murid}}</td>
					<td class="center">{{$murid->alamat_murid}}</td>
					<td class="center">{{$murid->kontak_murid}}</td>
					<td class="center">{{$murid->matkul_murid}}</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="btn btn-success" href="#">
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
@endsection
