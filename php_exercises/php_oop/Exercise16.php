<?php
    class ShoppingCart
    {
        private $items;
        private $total;

        public function __construct()
        {
            $this->items = [];
            $this->total = 0;
        }

        public function addItem($item, $price)
        {
            $this->items[$item] = $price;
            $this->total += $price;
        }

        public function getTotal()
        {
            return $this->total;
        }
    }

    $cart = new ShoppingCart();
    $amount = 10;
    for($i=1; $i<=10; $i++)
    {
        $cart->addItem("Product " . $i, $amount);
        $amount += 10;
    }

    $total = $cart->getTotal();
    echo "Total cost: $" . $total . "<br>";

    print_r($cart);
?>