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

    $name = "Juan Dela Cruz";
    $age = 30;
    $person = new Person($name, $age);
    echo $person;
?>