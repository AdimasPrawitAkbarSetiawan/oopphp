<?php
// Kelas Person, ini jadi dasar buat orang-orang (kayak student, teacher, dll)
class Person
{
    private $name; // Nama orangnya, tapi disimpan privat biar gak sembarang diakses

    public function __construct($name)
    {
        $this->name = $name; // Nama di-set waktu objek dibuat
    }

    // Dapatkan nama orang
    public function getName()
    {
        return $this->name;
    }

    // Ubah nama orang
    public function setName($name)
    {
        $this->name = $name;
    }
}

// Kelas Student yang turunan dari Person
class Student extends Person
{
    private $studentID; // ID student juga disimpan privat

    public function __construct($name, $studentID)
    {
        parent::__construct($name); // Panggil constructor dari Person buat set nama
        $this->studentID = $studentID; // Set studentID waktu objek dibuat
    }

    // Dapatkan ID student
    public function getStudentID()
    {
        return $this->studentID;
    }

    // Ubah ID student
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    // Override getName() buat nampilin nama plus ID student
    public function getName()
    {
        return "Student: " . parent::getName() . " (ID: " . $this->studentID . ")";
    }
}

// Contoh penggunaan
$student = new Student("Dimas", "S98765"); // Buat objek Student dengan nama dan ID

// Tampilkan nama dan ID student
echo $student->getName(); 
$student->setName("Akbar"); 
$student->setStudentID("INDO12345"); 
echo "<br>";
echo $student->getName();
?>
