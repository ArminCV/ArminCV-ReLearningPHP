<?php 
    class MyCalculator
    {
        protected $_num1;
        protected $_num2;

        public function __construct($num1, $num2)
        {
         $this->_num1 = $num1;
         $this->_num2 = $num2;   
        }

        public function add()
        {
            $sum = $this->_num1 + $this->_num2;
            return $sum;
        }

        public function multiply()
        {
            $product = $this->_num1 * $this->_num2;
            return $product;
        }

        public function subtract()
        {
            $difference = $this->_num1 - $this->_num2;
            return $difference;
        }
        
        public function divide()
        {
            $quotient = $this->_num1 / $this->_num2;
            return $quotient;
        }
    }

    $num1 = 12;
    $num2 = 6;
    $mycalc = new MyCalculator($num1, $num2);
    $sum = $mycalc->add();
    $product = $mycalc->multiply();
    $difference = $mycalc->subtract();
    $quotient = $mycalc->divide();

    echo "First Number is " . $num1 . "<br>";
    echo "Second Number is " . $num2 . "<br>";
    echo "-------------------------" . "<br>";
    echo "Sum is: " . $sum . "<br>";
    echo "Product is: " . $product . "<br>";
    echo "Difference is: " . $difference . "<br>";
    echo "Quotient is: " . $quotient . "<br>";
?>