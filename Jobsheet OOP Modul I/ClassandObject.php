<?php
// Membuat class Mahasiswa
class Mahasiswa
{
    // Atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan)
    {
        // Set atribut dengan nilai yang diberikan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData()
    {
        // Menampilkan data mahasiswa
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Instansiasi (membuat objek baru) dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Adimas", "12345678", "Teknik Informatika");

// Memanggil metode tampilkanData() untuk menampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>
