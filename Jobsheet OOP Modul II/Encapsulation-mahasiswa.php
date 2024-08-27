<?php
class Mahasiswa
//pertama harus membuat class atau kelas, class ini ibarat template untuk membuat objek mahasiswa agar mahasiswa ini mempunyai atribut dan perilaku yang sama
//karna yang diminta adalah kelas mahasiswa jadi kita membuat kelas dengan nama class mahasiswa
{
    //selanjutnya kita membuat atribut atau variabel di dalam kelas
    //karna yang diminta di soal adalah atribut nama,nim,jurusan jadi kita membuatnya sesuai dengan jobsheet
    //private merupakan atribut yg bersifat private, artinya hanya dapat diakses dari dalam kelas itu sendiri, bukan dari luar   
    private $nama;
    private $nim;
    private $jurusan;

    //konstruktor adalah fungsi khusus yang dijalankan secara otomatis saat objek baru dibuat dari kelas mahasiswa.
    //karna atributnya ada 3 yaitu nama,nim,jurusan jadi kita juga membuat 3 konstruktor yang terdiri dari atribut $nama,$nim,$jurusan 
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //selanjutnya getter untuk mengambil nilai pada atribut
    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    //selanjutnya setter untuk mengatur nilai pada atribut
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    //selanjutnya kita membuat metode/fungsi
    //nah metode tampilkanInfo() ini adalah kata kunci untuk menampilkan nama,nim,jurusan yang telah kita buat sebelumnya
    public function tampilkanInfo()
    {
        return "Nama: " . $this->getNama() . ", Nim: " . $this->getNim() . ", Jurusan: " . $this->getJurusan();
    }
}

//selanjutnya kita membuat objek,disini contoh nya yaitu adimas
$mahasiswa1 = new Mahasiswa("Adimas", "230202001", "D3 Teknik Informatika");

//selanjutnya kita menganti/ngeset input nya menggunakan setter, nama set nama, nim set nim, ini hanya contoh ganti nama dan nim
$mahasiswa1->setNama("Setiawan");
$mahasiswa1->setNim("230202002");
$mahasiswa1->setJurusan("D3 Teknik Mesin");

//setelah itu kita menampilkan objek dengan menggunakan echo, echo mengambil data dari objek mahasiswa1 / 2
//lalu objek mahasiswa menyesuaikan dengan kata kunci yang ada di fungsi tampilkanInfo() 
//selanjutnya kita getter untuk mengambil dan menampilkan nilai pada atribut
echo $mahasiswa1->tampilkanInfo();
