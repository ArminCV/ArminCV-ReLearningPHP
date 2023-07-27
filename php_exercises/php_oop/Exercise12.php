<?php
    class Logger
    {
        public static $logCount = 0;

        public static function log($message)
        {
            echo $message . "<br>";
            self::$logCount++;
        }
    }
    
    for($i=1; $i<=10; $i++)
    {
        Logger::log("Log message " . $i);
    }

    echo "Total log count: " . Logger::$logCount . "<br>";
?>