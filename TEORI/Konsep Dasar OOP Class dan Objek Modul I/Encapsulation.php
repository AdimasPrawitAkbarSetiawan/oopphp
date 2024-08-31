<?php
// Ini kita bikin kelas Buku
class Buku
{
    // Atribut yang cuma bisa diakses dari dalam kelas ini aja
    private $judul;
    private $penulis;

    // Konstruktor, otomatis jalan pas kita bikin objek baru
    public function __construct($judul, $penulis)
    {
        // Kita set judul buku sesuai yang kita kasih pas buat objek
        $this->judul = $judul;
        // Kita set juga siapa penulisnya
        $this->penulis = $penulis;
    }

    // Metode buat ngambil judul buku
    public function getJudul()
    {
        // Balikin judul buku yang ada di objek ini
        return $this->judul;
    }

    // Metode buat ganti judul buku
    public function setJudul($judul)
    {
        // Update judul buku dengan yang baru
        $this->judul = $judul;
    }
}

// Bikin objek baru dari kelas Buku, judulnya "Pemrograman PHP", penulisnya "Andi Prasetyo"
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");

// Tampilkan judul buku ke layar
// Outputnya: Pemrograman PHP
echo $buku1->getJudul();
?>
