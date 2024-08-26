<?php
class Mahasiswa
{
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru)
    {
        $this->jurusan = $jurusanBaru;
    }
}

// Instansiasi objek dari class Mahasiswa dengan constructor
$mahasiswa = new Mahasiswa("Cici", "230202003", "Teknik Industri");

// Mengubah jurusan menggunakan metode updateJurusan()
$mahasiswa->updateJurusan("Teknik Mesin");

// Tampilkan data mahasiswa yang sudah diperbarui
$mahasiswa->tampilkanData();
