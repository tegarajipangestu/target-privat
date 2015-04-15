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
					  <th>Pertemuan 1</th>
  					  <th>Pertemuan 2</th>
					  <th>Pertemuan 3</th>
					  <th>Pertemuan 4</th>
					  <th>Pertemuan 5</th>
					  <th>Pertemuan 6</th>
					  <th>Pertemuan 7</th>
					  <th>Pertemuan 8</th>
				  </tr>
			  </thead>   
			  <tbody>
				@foreach ($pengajars as $pengajar)
				<tr>
					<td>{{$pengajar->id_pengajar}}</td>
					<td>{{$pengajar->nama_pengajar}}</td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
					<td><input type="checkbox" id="optionsCheckbox2" value="option1"></td>
				</tr>
				@endforeach
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

@endsection
