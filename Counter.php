<?php
class Counter {
    // 1. Static Property: Milik class, dibagi oleh semua object.
    public static int $count = 0;
    
    // 2. Class Constant: Nilai tetap, tidak berubah.
    public const LABEL = "Jumlah objek";
    
    public function __construct() {
        // Setiap object dibuat, static property diincrement
        self::$count++;
    }
    
    // 3. Static Method
    public static function reset(): void { 
        self::$count = 0;
    }
}
?>