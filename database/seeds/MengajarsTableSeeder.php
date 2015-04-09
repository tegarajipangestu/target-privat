<?php
 
use Illuminate\Database\Seeder;
 
class MengajarsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('mengajars')->delete();
 
        $projects = array(
            ['id_pengajar' => '1', 'id_murid' => '1'],
            ['id_pengajar' => '1', 'id_murid' => '2'],
            ['id_pengajar' => '2', 'id_murid' => '3'],
            ['id_pengajar' => '2', 'id_murid' => '4'],
            ['id_pengajar' => '3', 'id_murid' => '5'],
            ['id_pengajar' => '3', 'id_murid' => '6'],
            ['id_pengajar' => '4', 'id_murid' => '7'],
            ['id_pengajar' => '4', 'id_murid' => '8'],
            ['id_pengajar' => '5', 'id_murid' => '9'],
            ['id_pengajar' => '5', 'id_murid' => '10'],
            ['id_pengajar' => '6', 'id_murid' => '11'],
            ['id_pengajar' => '6', 'id_murid' => '12'],

        );
        // Uncomment the below to run the seeder
        DB::table('mengajars')->insert($projects);
    }
 
}