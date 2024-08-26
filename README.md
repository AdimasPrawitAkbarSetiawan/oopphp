# DOKUMENTASI PHP OOP

Object-Oriented Programming (OOP) adalah sebuah paradigma pemrograman yang berorientasi pada objek. Dalam OOP, kode program diorganisasikan ke dalam unit-unit yang disebut kelas, yang bertindak sebagai cetak biru untuk membuat objek. Setiap objek merupakan entitas yang memiliki atribut (data) dan metode (fungsi) yang memungkinkan interaksi dengan data tersebut. 


## KONSEP DASAR

```bash
Class dan Object:

- Class: Merupakan cetak biru atau template untuk menciptakan objek.

- Object: Instance dari sebuah class, yang memiliki atribut (properties) dan perilaku (methods).

```

## Usage

```php
<?php
class Mahasiswa
{
    // atribut
    public $nama;
    public $nim;
    public $jurusan;

    // metode untuk menampilkan data mahasiswa
    public function tampilkanData()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// menginisiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Budi";
$mahasiswa1->nim = "230202001";
$mahasiswa1->jurusan = "Informatika";

// menampilkan data mahasiswa
$mahasiswa1->tampilkanData();

```
