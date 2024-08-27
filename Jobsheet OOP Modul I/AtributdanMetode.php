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

    // Metode setter untuk mengubah nilai nim
    public function setNim($nimBaru)
    {
        // Update nim dengan nim baru yang diberikan
        $this->nim = $nimBaru;
    }
}

// Instansiasi (membuat objek baru) dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Dimass", "230202001", "TI");

// Menampilkan data awal mahasiswa
echo "Data sebelum NIM diupdate:<br>";
$mahasiswa1->tampilkanData();

// Mengubah nilai NIM menggunakan metode setNim()
$mahasiswa1->setNim("230202005");

// Menampilkan data setelah NIM diupdate
echo "<br>Data setelah NIM diupdate:<br>";
$mahasiswa1->tampilkanData();
?>
