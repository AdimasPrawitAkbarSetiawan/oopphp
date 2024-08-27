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
