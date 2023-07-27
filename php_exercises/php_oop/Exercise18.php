<?php
    class Validation
    {
        public static function validateEmail($email)
        {
            return filter_var($email,
            FILTER_VALIDATE_EMAIL) !== false;
        }

        public static function validatePassword($password)
        {
            return strlen($password >= 8);
        }

        public static function validateField($field)
        {
            return !empty($field);
        }
    }

    $email = "admin@example.com";
    $password = "password123";
    $field = "text";

    if(Validation::validateEmail($email))
    {
        echo "Email is valid <br>";
    } else {
        echo "Email is invalid <br>";
    }

    if(Validation::validatePassword($password))
    {
        echo "Password is valid <br>";
    } else {
        echo "Password is invalid <br>";
    }

    if(Validation::validateField($field))
    {
        echo "Field is valid <br>";
    } else {
        echo "Field is invalid <br>";
    }
?>