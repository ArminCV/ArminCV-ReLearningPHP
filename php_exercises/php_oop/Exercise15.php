<?php
    class Calculator
    {
        private $result;

        public function __construct()
        {
            $this->result = 0;
        }

        public function getResult()
        {
            return $this->result;
        }

        public function addition($number)
        {
            return $this->result += $number;
        }

        public function subtraction($number)
        {
            return $this->result -= $number;
        }
    }

    $calculator = new Calculator();
    $result = $calculator->getResult();
    echo "Result: " . $result . "<br>";
    $calculator->addition(4);
    $result = $calculator->getResult();
    echo "Result: " . $result . "<br>";
    $calculator->addition(5);
    $result = $calculator->getResult();
    echo "Result: " . $result . "<br>";
    $calculator->subtraction(3);
    $result = $calculator->getResult();
    echo "Result: " . $result . "<br>";
?>