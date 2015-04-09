<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajarsMengajarsMuridsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jadwals', function(Blueprint $table)
		{
			$table->increments('id_jadwal');
			$table->integer('hari');
			$table->string('jam_awal');
			$table->string('jam_akhir');
			$table->timestamps();
		});
		Schema::create('pengajars', function(Blueprint $table)
		{
			$table->increments('id_pengajar');
			$table->integer('gaji');
			$table->string('nama');
			$table->string('alamat');
			$table->string('kontak');
			$table->string('matkul');
			$table->timestamps();
		});
		Schema::create('murids', function(Blueprint $table)
		{
			$table->increments('id_murid');
			$table->string('nama');
			$table->string('alamat');
			$table->string('kontak');
			$table->string('matkul');
			$table->timestamps();
		});
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id_user');
			$table->string('username');
			$table->string('password');
			$table->string('role');
			$table->timestamps();
		});
		Schema::create('jadwal-pengajar', function(Blueprint $table)
		{
			$table->integer('id_pengajar')->unsigned();			
			$table->integer('id_jadwal')->unsigned();			
			$table->foreign('id_pengajar')->references('id_pengajar')->on('pengajars')->onDelete('cascade');			
			$table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals')->onDelete('cascade');			
			$table->timestamps();
		});
		Schema::create('jadwal-murid', function(Blueprint $table)
		{
			$table->integer('id_murid')->unsigned();			
			$table->integer('id_jadwal')->unsigned();			
			$table->foreign('id_murid')->references('id_murid')->on('murids')->onDelete('cascade');			
			$table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals')->onDelete('cascade');			
			$table->timestamps();
		});
		Schema::create('user-murids', function(Blueprint $table)
		{
			$table->integer('id_murid')->unsigned();			
			$table->integer('id_user')->unsigned();			
			$table->foreign('id_murid')->references('id_murid')->on('murids')->onDelete('cascade');			
			$table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');			
			$table->timestamps();
		});
		Schema::create('user-pengajars', function(Blueprint $table)
		{
			$table->integer('id_pengajar')->unsigned();			
			$table->integer('id_user')->unsigned();			
			$table->foreign('id_pengajar')->references('id_pengajar')->on('pengajars')->onDelete('cascade');			
			$table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');			
			$table->timestamps();
		});
		Schema::create('mengajars', function(Blueprint $table)
		{
			$table->integer('id_pengajar')->unsigned();
			$table->integer('id_murid')->unsigned();
			$table->foreign('id_pengajar')->references('id_pengajar')->on('pengajars')->onDelete('cascade');
			$table->foreign('id_murid')->references('id_murid')->on('murids')->onDelete('cascade');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mengajars');
		Schema::drop('user-murids');
		Schema::drop('user-pengajars');
		Schema::drop('jadwal-murid');
		Schema::drop('jadwal-pengajar');
		Schema::drop('pengajars');
		Schema::drop('murids');
		Schema::drop('users');		
		Schema::drop('jadwals');		
//		Schema::drop('mengajars');
	}

}
