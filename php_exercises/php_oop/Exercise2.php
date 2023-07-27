<?php
    class Circle
    {
        private $_radius;

        public function __construct($radius)
        {
            $this->_radius = $radius;
        }

        public function calculateArea()
        {
            $area = pi() * pow($this->_radius, 2);
            return $area;
        }

        public function calculateCircumference()
        {
            $circumference = 2 * pi() * $this->_radius;
            return $circumference;
        }
    }
    $radius = 7;
    $circle = new Circle($radius);
    $area = $circle->calculateArea();
    $circumference = $circle->calculateCircumference();
    echo "Radius is " . $radius . "<br>";
    echo "Area: " . $area . "<br>";
    echo "Circumference: " . $circumference . "<br>";
?>