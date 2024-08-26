# LAPORAN DOKUMENTASI OOP

Object-Oriented Programming (OOP) adalah sebuah paradigma pemrograman yang berorientasi pada objek. Dalam OOP, kode program diorganisasikan ke dalam unit-unit yang disebut kelas, yang bertindak sebagai cetak biru untuk membuat objek. Setiap objek merupakan entitas yang memiliki atribut (data) dan metode (fungsi) yang memungkinkan interaksi dengan data tersebut. 


## CLASS

class ini ibarat template untuk membuat objek mahasiswa agar mahasiswa ini mempunyai atribut dan perilaku yang sama.

```php
class Mahasiswa
```

## ATRIBUT
atribut adalah property atau karakteristik dari sebuah objek.\
public adalah atribut yg bersifat public, artinya dapat di akses dari luar.
```php
  public $nama;
  public $nim;
  public $jurusan;
```

## KONSTRUKTOR

konstruktor adalah fungsi khusus yang dijalankan secara otomatis saat objek baru dibuat dari kelas mahasiswa.\
karna atributnya ada 3 yaitu nama,nim,jurusan jadi kita juga membuat 3 konstruktor yang terdiri dari atribut $nama,$nim,$jurusan.

```php
  public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```

### TAMPILKAN 
nah metode tampilkanInfo() ini adalah kata kunci untuk menampilkan nama,nim,jurusan yang telah kita buat sebelumnya.\
selanjutnya kita membuat objek,disini contoh nya ada 2 yaitu adimas dan akbar.
objek ini harus sesuai dengan fungsi yg kita buat, nama nama ,nim nim, jurusan jurusan.\
setelah itu kita menampilkan objek dengan menggunakan echo, echo mengambil data dari variabel mahasiswa1 / 2\
lalu objek mahasiswa menyesuaikan dengan kata kunci yang ada di fungsi tampilkanInfo().
```php
public function tampilkanInfo()
    {
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}

$mahasiswa1 = new Mahasiswa("Adimas", "230202001", "D3 Teknik Informatika");
$mahasiswa2 = new Mahasiswa("Akbar", "230202001", "D3 Teknik Informatika");

echo $mahasiswa1->tampilkanInfo();
echo '<br>';
echo $mahasiswa2->tampilkanInfo();
```
### SYNTAX LENGKAP
```php
<?php
class Mahasiswa
//pertama harus membuat class atau kelas, class ini ibarat template untuk membuat objek mahasiswa agar mahasiswa ini mempunyai atribut dan perilaku yang sama
//karna yang diminta adalah kelas mahasiswa jadi kita membuat kelas dengan nama class mahasiswa
{
    //selanjutnya kita membuat atribut di dalam kelas
    //karna yang diminta di soal adalah atribut nama,nim,jurusan jadi kita membuatnya sesuai dengan jobsheet
    //public adalah atribut yg bersifat public, artinya dapat di akses dari luar   
    public $nama;
    public $nim;
    public $jurusan;

    //konstruktor adalah fungsi khusus yang dijalankan secara otomatis saat objek baru dibuat dari kelas mahasiswa.
    //karna atributnya ada 3 yaitu nama,nim,jurusan jadi kita juga membuat 3 konstruktor yang terdiri dari atribut $nama,$nim,$jurusan
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }


    //selanjutnya kita membuat metode/fungsi
    //nah metode tampilkanInfo() ini adalah kata kunci untuk menampilkan nama,nim,jurusan yang telah kita buat sebelumnya
    public function tampilkanInfo()
    {
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
//selanjutnya kita membuat objek,disini contoh nya ada 2 yaitu adimas dan akbar
//objek ini harus sesuai dengan fungsi yg kita buat, nama nama ,nim nim, jurusan jurusan 
$mahasiswa1 = new Mahasiswa("Adimas", "230202001", "D3 Teknik Informatika");
$mahasiswa2 = new Mahasiswa("Akbar", "230202001", "D3 Teknik Informatika");
//setelah itu kita menampilkan objek dengan menggunakan echo, echo mengambil data dari variabel mahasiswa1 / 2
//lalu objek mahasiswa menyesuaikan dengan kata kunci yang ada di fungsi tampilkanInfo() 
echo $mahasiswa1->tampilkanInfo();
echo '<br>';
echo $mahasiswa2->tampilkanInfo();

```
