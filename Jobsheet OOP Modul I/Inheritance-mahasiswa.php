<?php
//pertama harus membuat class atau kelas, class ini ibarat template untuk membuat objek pengguna agar nama ini mempunyai atribut dan perilaku yang sama
//karna yang diminta adalah kelas pengguna jadi kita membuat kelas dengan nama class pengguna
class Pengguna
{
    //kata kunci protected berarti atribut ini bisa diakses oleh kelas itu sendiri dan kelas-kelas yang mewarisinya (kelas anak).
    protected $nama;

    //konstruktor adalah fungsi khusus yang dijalankan secara otomatis saat objek baru dibuat dari kelas pengguna.
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //getNama merupakan metode untuk mendapatkan nama
    public function getNama()
    {
        return $this->nama;
    }
}

//class dosen merupakan kelas anak yang mewarisi kelas pengguna
//extends pengguna artinya class dosen meliputi semua atribut dan metode dari class pengguna
class Dosen extends Pengguna
{
    //atribut $matakuliah adalah atribut tambahan yang sesuai permintaan jobsheet
    //private merupakan atribut yg bersifat private, artinya hanya dapat diakses dari dalam kelas itu sendiri, bukan dari luar
    private $mataKuliah;

    //konstruktor adalah fungsi khusus yang dijalankan secara otomatis saat objek baru dibuat dari kelas dosen.
    public function __construct($nama, $mataKuliah)
    {
        //parent::__construct($nama) digunakan untuk memanggil metode atau konstruktor dari kelas induk (pengguna) di dalam kelas anak (dosen).
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    //public function getMataKuliah() adalah metode untuk mendapatkan mata kuliah
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }

    //public function tampilkanDataDosen() metode untuk menampilkan data dosen
    public function tampilkanDataDosen()
    {
        return "Nama Dosen: " . $this->getNama() . ", Mata Kuliah: " . $this->getMataKuliah();
    }
}

//selanjutnya instansiasi objek dari kelas Dosen
$dosen1 = new Dosen("Pak Abdau", "Pemrograman Web");

// Menampilkan data dosen menggunakan echo
//karna objek nya hanya ada dosen1 jadi kita menampilkan nya hanya 1, jika ingin ditambah lagi maka membuat variabel dosen2 dst
echo $dosen1->tampilkanDataDosen();
