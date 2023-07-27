<?php
    abstract class Shape
    {
        public abstract function calculateArea();
    }

    class Triangle extends Shape
    {
        private $_base;
        private $_height;

        public function __construct($base, $height)
        {
            $this->_base = $base;
            $this->_height = $height;
        }

        public function calculateArea()
        {
            $area = ($this->_base * $this->_height) / 2;
            return $area;
        }
    }

    class Rectangle extends Shape
    {
        private $_length;
        private $_width;

        public function __construct($length, $width)
        {
            $this->_length = $length;
            $this->_width = $width;
        }

        public function calculateArea()
        {
            $area = $this->_length * $this->_width;
            return $area;
        }
    }
    $base = 5;
    $height = 7;
    $triangle = new Triangle($base, $height);
    $triArea = $triangle->calculateArea();
    echo "Base: " . $base . " | Height: " . $height . "<br>";
    echo "Triangle Area: " . $triArea . "<br>";

    $length = 4;
    $width = 6;
    $rectangle = new Rectangle($length, $width);
    $rectArea = $rectangle->calculateArea();
    echo "Length: " . $length . " | Width: " . $width . "<br>";
    echo "Rectangle Area: " . $rectArea . "<br>";

?>