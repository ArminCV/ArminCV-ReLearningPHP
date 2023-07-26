<?php
    class array_sort
    {
        protected $_assort;

        public function __construct(array $asort)
        {
            $this->_assort = $asort;
        }

        public function alhsort()
        {
            $sorted = $this->_assort;
            sort($sorted);
            return $sorted;
        }
    }
    $sortedarray = new array_sort(array(5, 2, 3, 1, 4));
    print_r($sortedarray->alhsort());
?>