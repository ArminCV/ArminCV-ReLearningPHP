<?php
    class Person
    {
        protected $name;
        protected $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function __toString()
        {
            return "Name: " . $this->name . "<br>" .
                    "Age: " . $this->age . "<br>";
        }
    }
    
    class Employee extends Person
    {
        private $salary;
        private $position;

        public function __construct($name, $age, $salary, $position)
        {
            parent::__construct($name, $age);
            $this->salary = $salary;
            $this->position = $position;
        }

        public function displayDetails()
        {
            echo "Name: " . $this->name . "</br>";
            echo "Age: " . $this->age . "</br>";
            echo "Salary: " . $this->salary . "</br>";
            echo "Position: " . $this->position . "</br>";
        }
    }

    $name = "Juan Dela Cruz";
    $age = 33;
    $salary = 6000;
    $position = "Manager";
    $employee = new Employee($name, $age, $salary, $position);
    $employee->displayDetails();
?>