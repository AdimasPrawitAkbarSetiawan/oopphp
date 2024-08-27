<?php
// Membuat class Mahasiswa
class Mahasiswa
{
    // Atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan)
    {
        // Set atribut dengan nilai yang diberikan saat objek dibuat
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

    // Metode untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusanBaru)
    {
        // Update jurusan dengan jurusan baru yang diberikan
        $this->jurusan = $jurusanBaru;
    }
}

// Instansiasi (membuat objek baru) dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("dimass1", "24654321", "Sistem Komunikasi");

// Menampilkan data awal mahasiswa
echo "Data sebelum jurusan diupdate:<br>";
$mahasiswa1->tampilkanData();

// Mengubah jurusan mahasiswa menggunakan metode updateJurusan()
$mahasiswa1->updateJurusan("Teknik Informatika");

// Menampilkan data setelah jurusan diupdate
echo "<br>Data setelah jurusan diupdate:<br>";
$mahasiswa1->tampilkanData();
?>
