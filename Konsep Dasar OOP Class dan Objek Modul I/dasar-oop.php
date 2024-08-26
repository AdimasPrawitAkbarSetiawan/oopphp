<?php
// Definisi Class 
class Buku
{
    // Atribut atau Properties    
    public $judul;
    public $penulis;

    // Constructor 
    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // Metode atau Function     
    public function tampilkanInfo()
    {
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}
// Instansiasi Objek 
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
$buku2 = new Buku("Kewarganegaraan", "Adimas");
echo $buku1->tampilkanInfo();
echo '<br>';
echo $buku2->tampilkanInfo();
