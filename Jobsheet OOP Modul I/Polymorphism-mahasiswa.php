<?php
//pertama harus membuat class atau kelas, class ini ibarat template untuk membuat objek pengguna agar nama ini mempunyai atribut dan perilaku yang sama
//karna yang diminta adalah kelas pengguna jadi kita membuat kelas dengan nama class pengguna
class Pengguna
{
    public function __construct() {}
    // metode aksesfitur untuk menentukan atau menggambarkan fitury ang dapat diakses oleh objek dari kelas tertentu
    public function aksesFitur()
    {
        return "Akses fitur umum untuk semua pengguna.";
    }
}

// class dosen merupakan class anak dari induk pengguna, extends artinya class dosen mewarisi dari class pengguna
class Dosen extends Pengguna

{
    // public function artinya fungsi nya dapat diakses oleh siapa saja dari luar
    // __construct() guna nya menginisiasi apabila menginstansiasi objek baru maka langsung dijalankan
    public function __construct() {}
    // Implementasi khusus untuk dosen
    public function aksesFitur()
    {
        return "Akses fitur khusus untuk Dosen: Mengelola nilai mahasiswa dan mengajar.";
    }
}

// class mahasiswa merupakan class anak dari induk pengguna, extends artinya class mahasiswa mewarisi dari class pengguna
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

// memanggil metode aksesFitur() dari masing-masing objek dan menampilkannya
echo $pengguna->aksesFitur() . "<br>" . $dosen->aksesFitur() . "<br>" . $mahasiswa->aksesFitur();
