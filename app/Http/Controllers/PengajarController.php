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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
