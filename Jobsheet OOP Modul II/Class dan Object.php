<?php
class Mahasiswa
{
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Budi";
$mahasiswa1->nim = "230202001";
$mahasiswa1->jurusan = "Informatika";

// Tampilkan data mahasiswa
$mahasiswa1->tampilkanData();
