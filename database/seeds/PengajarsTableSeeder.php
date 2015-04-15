<?php
 
use Illuminate\Database\Seeder;
 
class PengajarsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('pengajars')->delete();
 
        $projects = array(
            ['gaji' => '100000', 'nama_pengajar' => 'John', 'alamat_pengajar' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_pengajar' => '08561234567', 'matkul_pengajar' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '200000', 'nama_pengajar' => 'Dohn', 'alamat_pengajar' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_pengajar' => '08561234987', 'matkul_pengajar' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '300000', 'nama_pengajar' => 'Bohn', 'alamat_pengajar' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak_pengajar' => '08561234447', 'matkul_pengajar' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '100000', 'nama_pengajar' => 'John', 'alamat_pengajar' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_pengajar' => '08561234567', 'matkul_pengajar' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '200000', 'nama_pengajar' => 'Dohn', 'alamat_pengajar' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_pengajar' => '08561234987', 'matkul_pengajar' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '300000', 'nama_pengajar' => 'Bohn', 'alamat_pengajar' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak_pengajar' => '08561234447', 'matkul_pengajar' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '100000', 'nama_pengajar' => 'John', 'alamat_pengajar' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_pengajar' => '08561234567', 'matkul_pengajar' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '200000', 'nama_pengajar' => 'Dohn', 'alamat_pengajar' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_pengajar' => '08561234987', 'matkul_pengajar' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '300000', 'nama_pengajar' => 'Bohn', 'alamat_pengajar' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak_pengajar' => '08561234447', 'matkul_pengajar' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '100000', 'nama_pengajar' => 'John', 'alamat_pengajar' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_pengajar' => '08561234567', 'matkul_pengajar' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '200000', 'nama_pengajar' => 'Dohn', 'alamat_pengajar' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_pengajar' => '08561234987', 'matkul_pengajar' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '300000', 'nama_pengajar' => 'Bohn', 'alamat_pengajar' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak_pengajar' => '08561234447', 'matkul_pengajar' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '100000', 'nama_pengajar' => 'John', 'alamat_pengajar' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_pengajar' => '08561234567', 'matkul_pengajar' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '200000', 'nama_pengajar' => 'Dohn', 'alamat_pengajar' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_pengajar' => '08561234987', 'matkul_pengajar' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '300000', 'nama_pengajar' => 'Bohn', 'alamat_pengajar' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak_pengajar' => '08561234447', 'matkul_pengajar' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '100000', 'nama_pengajar' => 'John', 'alamat_pengajar' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak_pengajar' => '08561234567', 'matkul_pengajar' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '200000', 'nama_pengajar' => 'Dohn', 'alamat_pengajar' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak_pengajar' => '08561234987', 'matkul_pengajar' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['gaji' => '300000', 'nama_pengajar' => 'Bohn', 'alamat_pengajar' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak_pengajar' => '08561234447', 'matkul_pengajar' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],

        );
        // Uncomment the below to run the seeder
        DB::table('pengajars')->insert($projects);
    }
 
}