<?php
// Langkah 1: Anonymous class sederhana
$logger = new class {
    public function log(string $message): void {
        echo "[LOG] $message\n";
    }
};

$logger->log("Sistem berjalan");

// Langkah 3: Anonymous class dengan constructor dan property
$fancyLogger = new class("INFO") {
    // Property promotion digunakan di constructor
    public function __construct(public string $level) {} 
    
    public function log(string $msg): void { 
        echo "[$this->level] $msg\n"; 
    }
};

$fancyLogger->log("Aplikasi telah diinisialisasi");
?>