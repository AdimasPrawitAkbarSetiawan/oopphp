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
