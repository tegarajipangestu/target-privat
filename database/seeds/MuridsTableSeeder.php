<?php
 
use Illuminate\Database\Seeder;
 
class MuridsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('murids')->delete();
 
        $projects = array(
            ['nama_murid' => 'John', 'alamat_murid' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_murid' => '08561234567', 'matkul_murid' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Dohn', 'alamat_murid' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_murid' => '08561234987', 'matkul_murid' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Bohn', 'alamat_murid' => 'Jalan Pelesiran 55 Kota Bandung', 'kontak_murid' => '08561233287', 'matkul_murid' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'John', 'alamat_murid' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_murid' => '08561234567', 'matkul_murid' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Dohn', 'alamat_murid' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_murid' => '08561234987', 'matkul_murid' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Bohn', 'alamat_murid' => 'Jalan Pelesiran 55 Kota Bandung', 'kontak_murid' => '08561233287', 'matkul_murid' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'John', 'alamat_murid' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_murid' => '08561234567', 'matkul_murid' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Dohn', 'alamat_murid' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_murid' => '08561234987', 'matkul_murid' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Bohn', 'alamat_murid' => 'Jalan Pelesiran 55 Kota Bandung', 'kontak_murid' => '08561233287', 'matkul_murid' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'John', 'alamat_murid' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_murid' => '08561234567', 'matkul_murid' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Dohn', 'alamat_murid' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_murid' => '08561234987', 'matkul_murid' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama_murid' => 'Bohn', 'alamat_murid' => 'Jalan Pelesiran 55 Kota Bandung', 'kontak_murid' => '08561233287', 'matkul_murid' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],

        );
        // Uncomment the below to run the seeder
        DB::table('murids')->insert($projects);
    }
 
}