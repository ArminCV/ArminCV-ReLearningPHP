<?php
    interface Resizable
    {
        public function resize($percentage);
    }

    class Square implements Resizable
    {
        private $side;

        public function __construct($side)
        {
            $this->side = $side;
        }

        public function getArea()
        {
            $area = pow($this->side, 2);
            return $area;
        }

        public function getSide()
        {
            return $this->side;
        }

        public function resize($percentage)
        {
            $this->side = $this->side * ($percentage / 100);
            return $this->side;
        }
    }

    $square = new Square(10);
    $side = $square->getSide();
    $percent = 60;
    $resized = $square->resize($percent);
    $area = $square->getArea();

    echo "Initial Side Length: " . $side . "<br>";
    echo "Resized Side Length: " . $resized . "<br>";
    echo "Area: " . $area;
?>