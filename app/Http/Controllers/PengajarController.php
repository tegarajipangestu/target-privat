<?php namespace App\Http\Controllers;

use DB;
use Datatables;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;
use App\Pengajar;

class PengajarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$currentpage = 'daftar pengajar';
		$pengajars = Pengajar::all();
		return view('indexpengajar',compact('pengajars','currentpage'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$currentpage = 'daftar pengajar';
		return view('createpengajar',compact('currentpage'));
	}
	public function showallpengajar()
	{

		$result = DB::table('pengajars')
		->select('pengajars.id_pengajar as id', 'pengajars.nama as nama');
//		dd($result);
		return Datatables::of($result)
		->addColumn('action', 'action here')
		->make(true);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
		Pengajar::create($input);
		return redirect('indexpengajar');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pengajar = DB::table('pengajars')
            ->join('mengajars', 'mengajars.id_pengajar', '=', 'pengajars.id_pengajar')
            ->join('murids', 'murids.id_murid', '=', 'mengajars.id_murid')
            ->where('pengajars.id_pengajar','=',$id)
            ->get();
//		$pengajar = Pengajar::where('id_pengajar' , '=', $id)->first();;
		return $pengajar;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($pengajar)
	{
		// DB::table('pengajars')
  //           ->where('id_pengajar', $pengajar['id_pengajar'])
  //           ->update(['nama_pengajar' => $pengajar['nama_pengajar'])
  //           ->update(['alamat_pengajar' => $pengajar['alamat_pengajar'])
  //           ->update(['kontak_pengajar' => $pengajar['kontak_pengajar'])
  //           ->update(['matkul_pengajar' => $pengajar['matkul_pengajar'])
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showupdate($id)
	{
		$pengajar = Pengajar::where('id_pengajar' , '=', $id)->first();;
		return view('updatepengajar', compact('pengajar'));
	}
	public function postupdate($id)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
