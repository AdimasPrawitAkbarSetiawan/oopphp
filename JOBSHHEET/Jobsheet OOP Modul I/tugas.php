<?php
class Dosen
{
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    public function tampilkanDosen()
    {
        return "Nama: " . $this->nama . "<br>" .
            "NIP: " . $this->nip . "<br>" .
            "mataKuliah: " . $this->mataKuliah . "<br>";
    }
}

$dosen1 = new Dosen("Pak Abdau", "12345678", "Pemrograman Web");
echo $dosen1->tampilkanDosen();
