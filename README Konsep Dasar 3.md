# LAPORAN DOKUMENTASI OOP

Object-Oriented Programming (OOP) adalah sebuah paradigma pemrograman yang berorientasi pada objek. Dalam OOP, kode program diorganisasikan ke dalam unit-unit yang disebut kelas, yang bertindak sebagai cetak biru untuk membuat objek. Setiap objek merupakan entitas yang memiliki atribut (data) dan metode (fungsi) yang memungkinkan interaksi dengan data tersebut. 


## CLASS

Class adalah konsep dasar dalam pemrograman berbasis objek (OOP) yang berfungsi sebagai cetak biru atau blueprint untuk menciptakan objek, membuat pemrograman menjadi lebih terstruktur dan efisien.

```php
class Mahasiswa
```

## ATRIBUT
atribut adalah property atau karakteristik dari sebuah objek. pengertian lainnya atribut adalah deskripsi sesuatu yang digunakan untuk memanipulasi atau merujuk elemen/bidang/file.git pull\
public adalah atribut yg bersifat public, artinya dapat di akses dari luar.
```php
  public $nama;
  public $nim;
  public $jurusan;
```

## KONSTRUKTOR

konstruktor adalah fungsi khusus .Constructor biasanya digunakan untuk memberikan nilai awal kepada atribut-atribut kelas saat objek dibuat\
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
## INHERITANCE
```php
<?php
class Person
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
class Student extends Person
{
    public $StudentID;
    public function __construct($name,$StudentID){
        parent::__construct($name);
        $this->StudentID = $StudentID;
    }
    public function getStudentID()
    {
        return $this->StudentID;
    }
}
$name = new Student("Dimas", "Akbar");
echo $name->getName() . "oke" . $name->getStudentID();


```

hasil : 

![hasil class and object](../assests/inheritance-modul3.png)

## POLYMORPHISM
```php
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
```
hasil : 

![hasil class and object](../assests/ploymorphism-modul3.png)

## ENCAPSULATION
```php
<?php
class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Student extends Person
{
    private $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID()
    {
        return $this->studentID;
    }

    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    public function getName()
    {
        return "Student: " . parent::getName() . " (ID: " . $this->studentID . ")";
    }
}


$student = new Student("Dimas", "S98765");


echo $student->getName(); 
$student->setName("Akbar");
$student->setStudentID("INDO12345");
echo "<br>";
echo $student->getName(); 
?>

```
hasil : ![hasil class and object](../assests/encapsulation-modul3.png)

## ABSTRACTION
```php
<?php
// Ini adalah kelas abstrak Course, yang jadi blueprint buat kursus
abstract class Course
{
    protected $courseName; // Nama kursus disimpan di sini

    public function __construct($courseName)
    {
        $this->courseName = $courseName; // Set nama kursus waktu objek dibuat
    }

    // Metode abstrak ini wajib diimplementasi sama kelas yang nge-extend
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse ini nge-extend dari Course, khusus buat kursus online
class OnlineCourse extends Course
{
    private $platform; // Platform tempat kursus online diadakan

    public function __construct($courseName, $platform)
    {
        parent::__construct($courseName); // Panggil constructor dari Course
        $this->platform = $platform; // Set platform tempat kursus
    }

    // Implementasi dari getCourseDetails buat kursus online
    public function getCourseDetails()
    {
        return "Online Course: " . $this->courseName . " di platform " . $this->platform;
    }
}

// Kelas OfflineCourse ini juga nge-extend dari Course, tapi buat kursus offline
class OfflineCourse extends Course
{
    private $location; // Lokasi di mana kursus offline diadakan

    public function __construct($courseName, $location)
    {
        parent::__construct($courseName); // Panggil constructor dari Course
        $this->location = $location; // Set lokasi kursus
    }

    // Implementasi dari getCourseDetails buat kursus offline
    public function getCourseDetails()
    {
        return "Offline Course: " . $this->courseName . " di lokasi " . $this->location;
    }
}

// Contoh penggunaan kelas-kelas tadi
$onlineCourse = new OnlineCourse("Alpro", "PNC"); // Buat objek kursus online
$offlineCourse = new OfflineCourse("Basis Data", "GTIL"); // Buat objek kursus offline

// Tampilkan detail kursus
echo $onlineCourse->getCourseDetails(); 
echo "<br>";
echo $offlineCourse->getCourseDetails(); 
?>

```
hasil : ![hasil class and object](../assests/abstrac-modul3.png)
