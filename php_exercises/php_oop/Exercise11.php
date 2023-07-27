<?php
    interface Comparable
    {
        public function compareTo($other);
    }

    class Product
    {
        private $name;
        private $price;

        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function compareTo($other)
        {
            if($other instanceof Product)
            {
                if($this->price < $other->getPrice())
                {
                    return -1;
                } elseif($this->price > $other->getPrice()) 
                {
                    return 1;
                } else {
                    return 0;
                }
            } else {
                throw new Exception("Invalid comparison object");
            }
        }
    }

    $name1 = "Desktop";
    $price1 = 1000;
    $product1 = new Product($name1, $price1);

    $name2 = "Laptop";
    $price2 = 1000;
    $product2 = new Product($name2, $price2);

    $result = $product1->compareTo($product2);

    if($result < 0)
    {
        echo $product1->getName() . " is cheaper than " . $product2->getName() . "</br>";
    } elseif($result > 0) {
        echo $product1->getName() . " is more expensive than " . $product2->getName() . "</br>";
    } else {
        echo $product1->getName() . " and " . $product2->getName() . " have the same price." . "</br>";
    }
?>