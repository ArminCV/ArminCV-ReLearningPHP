<?php
    class Logger
    {
        private static $instance;
        private $logs;

        public function __construct()
        {
            $this->logs = [];
        }

        public static function getInstance()
        {
            if(self::$instance === null)
            {
                self::$instance = new Logger();
            }
            return self::$instance;
        }

        public function log($message)
        {
            $this->logs[] = $message;
        }

        public function getLogs()
        {
            return $this->logs;
        }
    }

    $logger = Logger::getInstance();
    
    for($i=1; $i<=10; $i++)
    {
        $logger->log("Log message " . $i . "<br>");
    }

    $logs = $logger->getLogs();
    foreach($logs as $log)
    {
        echo $log . "\n";
    }
?>