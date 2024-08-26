<?php
// Membuat class abstrak Pengguna
abstract class Pengguna
{
    // Metode abstrak aksesFitur() yang harus diimplementasikan oleh kelas anak
    abstract public function aksesFitur();
}

// Kelas Mahasiswa yang mengimplementasikan metode aksesFitur() dari kelas Pengguna
class Mahasiswa extends Pengguna
{
    // Implementasi metode aksesFitur() untuk Mahasiswa
    //public adalah atribut yg bersifat public, artinya dapat di akses dari luar
    public function aksesFitur()
    {
        return "Akses fitur untuk Mahasiswa: Melihat jadwal, mengumpulkan tugas, dan melihat nilai.";
    }
}

// Kelas Dosen yang mengimplementasikan metode aksesFitur() dari kelas Pengguna
class Dosen extends Pengguna
{
    // Implementasi metode aksesFitur() untuk Dosen
    //public adalah atribut yg bersifat public, artinya dapat di akses dari luar
    public function aksesFitur()
    {
        return "Akses fitur untuk Dosen: Mengelola nilai mahasiswa dan mengajar.";
    }
}

// Instansiasi objek dari kelas Mahasiswa dan Dosen
$mahasiswa = new Mahasiswa();
$dosen = new Dosen();

// Memanggil metode aksesFitur() dari masing-masing objek dan menampilkannya
echo $mahasiswa->aksesFitur() . "<br>" . $dosen->aksesFitur();
