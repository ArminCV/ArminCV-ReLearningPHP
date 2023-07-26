<?php 
    class user_message
    {
        public $message = "Hello All, I am ";

        public function introduce($name)
        {
            return $this->message . $name;
        }
    }
    $my_message = new user_message();
    echo $my_message->introduce('Scott') . "\n";
?>