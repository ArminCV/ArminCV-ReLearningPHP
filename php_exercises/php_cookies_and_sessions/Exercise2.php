<?php
    $cookieName = "username";

    if(isset($_COOKIE[$cookieName]))
    {
        $_COOKIE[$cookieName] = $cookieName;
        echo "Value of cookie 'username':  " . $cookieName;
    }
    else
    {
        echo "Cookie 'username' not found.";
    }
?>