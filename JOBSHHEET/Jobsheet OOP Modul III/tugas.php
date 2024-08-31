<?php

// Kelas Induk: Person
class Person
{
    protected $nama;
    protected $usia;

    public function __construct($nama, $usia)
    {
        $this->nama = $nama;
        $this->usia = $usia;
    }

    // Metode getRole() akan di-override di kelas turunan
    public function getRole()
    {
        return "Unknown Role";
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getUsia()
    {
        return $this->usia;
    }
}

// Kelas Turunan: Dosen
class Dosen extends Person
{
    private $nidn;

    public function __construct($nama, $usia, $nidn)
    {
        parent::__construct($nama, $usia);
        $this->nidn = $nidn;
    }

    public function getRole()
    {
        return "Dosen";
    }

    public function getNidn()
    {
        return $this->nidn;
    }

    public function setNidn($nidn)
    {
        $this->nidn = $nidn;
    }
}

// Kelas Turunan: Mahasiswa
class Mahasiswa extends Person
{
    private $nim;

    public function __construct($nama, $usia, $nim)
    {
        parent::__construct($nama, $usia);
        $this->nim = $nim;
    }

    public function getRole()
    {
        return "Mahasiswa";
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }
}

// Kelas Abstrak: Jurnal
abstract class Jurnal
{
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    abstract public function submitJurnal();

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
}

// Kelas Turunan Jurnal: JurnalDosen
class JurnalDosen extends Jurnal
{
    public function submitJurnal()
    {
        echo "Jurnal Dosen dengan judul '" . $this->judul . "' telah diajukan oleh Dosen " . $this->penulis . ".<br>";
    }
}

// Kelas Turunan Jurnal: JurnalMahasiswa
class JurnalMahasiswa extends Jurnal
{
    public function submitJurnal()
    {
        echo "Jurnal Mahasiswa dengan judul '" . $this->judul . "' telah diajukan oleh Mahasiswa " . $this->penulis . ".<br>";
    }
}

// --- Penggunaan dan Pengujian ---

// Membuat objek Dosen
$dosen = new Dosen("Pak Riyadi", 45, "123456");
echo $dosen->getNama() . " adalah seorang " . $dosen->getRole() . "<br>";
echo "NIDN: " . $dosen->getNidn() . "<br><br>";

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa("Dimas", 20, "983433");
echo $mahasiswa->getNama() . " adalah seorang " . $mahasiswa->getRole() . "<br>";
echo "NPM: " . $mahasiswa->getNim() . "<br><br>";

// Mengubah NIM Mahasiswa menggunakan setter
$mahasiswa->setNim("123789");
echo "NPM baru: " . $mahasiswa->getNim() . "<br><br>";

// Membuat objek JurnalDosen dan JurnalMahasiswa
$jurnalDosen = new JurnalDosen("Gedung PNC", $dosen->getNama());
$jurnalMahasiswa = new JurnalMahasiswa("Studi Sistem Komunikasi", $mahasiswa->getNama());

$jurnalDosen->submitJurnal();
$jurnalMahasiswa->submitJurnal();

?>
