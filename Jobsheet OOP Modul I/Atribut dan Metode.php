<?php
//pertama harus membuat class atau kelas, class ini ibarat template untuk membuat objek mahasiswa agar mahasiswa ini mempunyai atribut dan perilaku yang sama
//karna yang diminta adalah kelas mahasiswa jadi kita membuat kelas dengan nama class mahasiswa
class Mahasiswa
{
    //selanjutnya kita membuat atribut atau variabel di dalam kelas
    //karna yang diminta di soal adalah atribut nama,nim,jurusan jadi kita membuatnya sesuai dengan jobsheet
    //public merupakan atribut yg bersifat public, artinya hanya dapat diakses dari luar
    public $nama;
    public $nim;
    public $jurusan;

    //konstruktor adalah fungsi khusus yang dijalankan secara otomatis saat objek baru dibuat dari kelas mahasiswa.
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // public function tampilkanData() adalah metode untuk menampilkan data mahasiswa
    public function tampilkanData()
    {
        return "Nama: " . $this->nama . "<br>" .
            "NIM: " . $this->nim . "<br>" .
            "Jurusan: " . $this->jurusan . "<br>";
    }

    // public function updateJurusan($jurusanBaru) adalah metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru)
    {
        $this->jurusan = $jurusanBaru;
    }

    // public function setNim($nimBaru) metode untuk mengubah nim
    public function setNim($nimBaru)
    {
        $this->nim = $nimBaru;
    }
}

// Instansiasi objek dari class Mahasiswa dengan constructor
$mahasiswa = new Mahasiswa("Dedi", "230202004", "Teknik Elektro");

// Mengubah nim menggunakan metode setNim()
$mahasiswa->setNim("230202005");

// Mengubah jurusan menggunakan metode updateJurusan()
$mahasiswa->updateJurusan("Teknik Sipil");

// Tampilkan data mahasiswa yang sudah diperbarui
echo $mahasiswa->tampilkanData();
