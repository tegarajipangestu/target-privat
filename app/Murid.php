<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model {

			/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'murids';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = ['nama', 'alamat', 'kontak','matkul'];


}
