<?php
/**Business logic */
    class User
    {
        private const PASSWORD_BCRYPT = "..."; 
        private $username;
        private $email;
        private $password;

        public function __construct($username, $email, $password)
        {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }

        public function get_username()
        {
            return $this->username;
        }

        public function set_username($value)
        {
            $this->username = $value;
        }

        public function get_email()
        {
            return $this->email;
        }

        public function set_email($value)
        {
            $this->password = $value;
        }

        public function get_password()
        {
            return $this->password;
        }

        public function set_password($value)
        {
            $this->password = password_hash($value, User::PASSWORD_BCRYPT);
        }

    }

?>