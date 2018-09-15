<?php
namespace Singleton;

class LogsSingleton
{
    protected static $instance;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
    
    public function saveLog(array $dados)
    {
        $filename = 'logs.txt';

        $oldlogs = [];
        if (filezise($filename) > 0) {
            $filecontent = file_get_contents($filename);
            $oldlogs = json_decode($filecontent, true);
        }
        $oldlogs[] = $dados;
        $file = fopen($filename, 'w');
        fwrite($file, json_encode($oldlogs));
        fclose($file);
    }
    
    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    } 
}
