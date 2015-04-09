<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model {

		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pengajars';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = ['nama', 'gaji', 'alamat', 'kontak','matkul'];


}
