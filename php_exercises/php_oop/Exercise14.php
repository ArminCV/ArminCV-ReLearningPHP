<?php
    class File
    {
        public $name;
        public $size;

        public function __construct($name, $size)
        {
            $this->name = $name;
            $this->size = $size;
        }

        public static function calculateTotalSize($files)
        {
            $totalSize = 0;
            foreach($files as $file)
            {
                if($file instanceof File)
                {
                    $totalSize += $file->size;
                }
            }
            return $totalSize;
        }
    }

    $files = array();

    $size = 100;
    for($i=1; $i<=10; $i++)
    {
        $file = new File("file" . $i . ".txt", $size);
        $size += 150;
        array_push($files, $file, $i);
    }

    $totalSize = File::calculateTotalSize($files);
    echo "Total size of files: " . $totalSize . " bytes" . "<br>";
    
   print_r($files);
?>