<?php
// Kelas Person sebagai dasar untuk kelas lain, misalnya Student
class Person
{
    protected $name; // Atribut name disimpan protected agar bisa diakses kelas turunannya

    public function __construct($name)
    {
        $this->name = $name; // Set nama ketika objek dibuat
    }

    public function getName()
    {
        return $this->name; // Mengembalikan nama orang
    }
}

// Kelas Student yang merupakan turunan dari Person
class Student extends Person
{
    public $StudentID; // Atribut StudentID disimpan public biar bisa diakses langsung

    public function __construct($name, $StudentID)
    {
        parent::__construct($name); // Panggil constructor dari Person buat set nama
        $this->StudentID = $StudentID; // Set StudentID ketika objek dibuat
    }

    public function getStudentID()
    {
        return $this->StudentID; // Mengembalikan StudentID
    }
}

// Contoh penggunaan
$name = new Student("Dimas", "Akbar"); 
echo $name->getName() . "oke" . $name->getStudentID(); 
?>
