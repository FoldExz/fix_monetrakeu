<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

$provId = DB::table('t_provinsi')->where('nama_provinsi', 'Jawa Timur')->value('id_provinsi');
$kabId = DB::table('t_kabupaten_kota')->where('nama_kabupaten_kota', 'Kota Surabaya')->value('id_kabupaten_kota');
$kecId = DB::table('t_kecamatan')->where('nama_kecamatan', 'Bubutan')->value('id_kecamatan');
$kelId = DB::table('t_kelurahan')->where('nama_kelurahan', 'Alun-Alun Contong')->value('id_kelurahan');

// Hapus jika sudah ada untuk menghindari duplikat
DB::table('t_user')->where('nip', 'admin')->delete();
DB::table('t_pegawai')->where('nip', 'admin')->delete();

DB::table('t_pegawai')->insert([
    'nip' => 'admin',
    'nama' => 'Administrator Utama',
    'gelar_depan' => '',
    'gelar_belakang' => '',
    'nik' => '1234567890123456',
    'tempat_lahir' => 'Surabaya',
    'tanggal_lahir' => '1990-01-01',
    'jenis_kelamin' => 'laki-laki',
    'hp' => '08123456789',
    'email' => 'admin@admin.com',
    'alamat' => 'Jl. Admin',
    'rt' => 1,
    'rw' => 1,
    'kode_pos' => '12345',
    'agama' => 'islam',
    'status_kepegawaian' => 'pns',
    'id_provinsi' => $provId,
    'id_kabupaten_kota' => $kabId,
    'id_kecamatan' => $kecId,
    'id_kelurahan' => $kelId,
    'created_at' => now(),
    'updated_at' => now(),
]);

DB::table('t_user')->insert([
    'nip' => 'admin',
    'level' => 'admin',
    'password' => Hash::make('admin'),
]);

echo "Berhasil membuat user admin!\n";
