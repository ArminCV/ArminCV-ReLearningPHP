<?php
    class Rectangle
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

        public function calculatePerimeter()
        {
            $perimeter = 2 * ($this->_length + $this->_width);
            return $perimeter;
        }
    }
    $length = 12;
    $width = 9;
    $rect = new Rectangle($length, $width);
    echo "Length: " . $length . " | Width: " . $width . "<br>";
    echo "Area of the Rectangle is " . $rect->calculateArea() . "<br>";
    echo "Perimeter of the Rectangle is " . $rect->calculatePerimeter();
?>