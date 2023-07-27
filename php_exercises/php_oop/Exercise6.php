<?php
    class Student
    {
        private $name;
        private $age;
        private $grade;

        public function __construct($name, $age, $grade)
        {
            $this->name = $name;
            $this->age = $age;
            $this->grade = $grade;
        }

        public function displayStudentInfo()
        {
            echo "Name: " . $this->name . "<br>";
            echo "Age: " . $this->age . "<br>";
            echo "Grade: " . $this->grade . "<br>";
        }
    }

    $name = "GWladus Andrea";
    $age = 16;
    $grade = 10;
    $student = new Student($name, $age, $grade);
    $student->displayStudentInfo();
?>