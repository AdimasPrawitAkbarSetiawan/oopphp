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
    public $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getName()
    {
        return "Student: " . $this->name . " ( " . $this->studentID . ")";
    }
}

class Teacher extends Person
{
    private $teacherID;

    public function __construct($name, $teacherID)
    {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName()
    {
        return "Teacher: " . $this->name . " ( " . $this->teacherID . ")";
    }
}

$teacher = new Teacher("Pak Abdau", "T12345");
$student = new Student("Dimas", "S98765");

echo $teacher->getName(); 
echo "<br>";
echo $student->getName(); 

?>
