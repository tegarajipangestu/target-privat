<?php
 
use Illuminate\Database\Seeder;
 
class MuridsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('murids')->delete();
 
        $projects = array(
            ['nama' => 'John', 'alamat' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak' => '08561234567', 'matkul' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Dohn', 'alamat' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak' => '08561234987', 'matkul' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Bohn', 'alamat' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak' => '08561234447', 'matkul' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'John', 'alamat' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak' => '08561234567', 'matkul' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Dohn', 'alamat' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak' => '08561234987', 'matkul' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Bohn', 'alamat' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak' => '08561234447', 'matkul' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'John', 'alamat' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak' => '08561234567', 'matkul' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Dohn', 'alamat' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak' => '08561234987', 'matkul' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Bohn', 'alamat' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak' => '08561234447', 'matkul' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'John', 'alamat' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak' => '08561234567', 'matkul' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Dohn', 'alamat' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak' => '08561234987', 'matkul' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Bohn', 'alamat' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak' => '08561234447', 'matkul' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'John', 'alamat' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak' => '08561234567', 'matkul' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Dohn', 'alamat' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak' => '08561234987', 'matkul' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Bohn', 'alamat' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak' => '08561234447', 'matkul' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'John', 'alamat' => 'Jalan Pelesiran 57 Kota Bandung', 'kontak' => '08561234567', 'matkul' => 'Kalkulus','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Dohn', 'alamat' => 'Jalan Pelesiran 56 Kota Bandung', 'kontak' => '08561234987', 'matkul' => 'Fisika','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['nama' => 'Bohn', 'alamat' => 'Jalan Pelesiran 58 Kota Bandung', 'kontak' => '08561234447', 'matkul' => 'Kimia','created_at' => new DateTime, 'updated_at' => new DateTime],

        );
        // Uncomment the below to run the seeder
        DB::table('murids')->insert($projects);
    }
 
}