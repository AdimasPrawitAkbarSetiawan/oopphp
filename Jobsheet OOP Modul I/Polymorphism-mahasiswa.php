<?php
//pertama harus membuat class atau kelas, class ini ibarat template untuk membuat objek pengguna agar nama ini mempunyai atribut dan perilaku yang sama
//karna yang diminta adalah kelas pengguna jadi kita membuat kelas dengan nama class pengguna
class Pengguna
{
    public function __construct() {}
    // metode aksesfitur untuk 
    public function aksesFitur()
    {
        return "Akses fitur umum untuk semua pengguna.";
    }
}

// Kelas Anak - Dosen
class Dosen extends Pengguna

{
    public function __construct() {}
    // Implementasi khusus untuk dosen
    public function aksesFitur()
    {
        return "Akses fitur khusus untuk Dosen: Mengelola nilai mahasiswa dan mengajar.";
    }
}

// Kelas Anak - Mahasiswa
class Mahasiswa extends Pengguna
{
    public function __construct() {}
    // Implementasi khusus untuk mahasiswa
    public function aksesFitur()
    {
        return "Akses fitur khusus untuk Mahasiswa: Melihat jadwal, mengumpulkan tugas, dan melihat nilai.";
    }
}

// Instansiasi objek dari kelas Pengguna, Dosen, dan Mahasiswa
$pengguna = new Pengguna();
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Memanggil metode aksesFitur() dari masing-masing objek dan menampilkannya
echo $pengguna->aksesFitur() . "<br>" . $dosen->aksesFitur() . "<br>" . $mahasiswa->aksesFitur();
