<?php
    class MyClass
    {
        public function __construct()
        {
            echo __CLASS__ . ' class has initialized!' ."\n";
        }
    }
    $userclass = new MyClass;
?>