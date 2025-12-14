<?php
require_once 'Counter.php';

// 2. Buat object untuk menaikkan counter
new Counter();
new Counter();
new Counter();

// 3. Cetak hasil
// Akses Constant dan Static Property tanpa object
echo Counter::LABEL . ": " . Counter::$count . "\n";

// 4. Panggil Static Method reset()
Counter::reset(); 

// Amati hasilnya (Count menjadi 0)
echo "Count setelah reset: " . Counter::$count . "\n"; 
?>