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
