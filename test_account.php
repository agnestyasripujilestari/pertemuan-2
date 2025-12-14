<?php
require_once 'Account.php';

try {
    $acc = new Account("Rani", 5000, "1234");
    
    // 1. Mengakses PUBLIC property (BERHASIL)
    echo "Pemilik: " . $acc->owner . "\n";
    
    // 2. Mengakses property melalui PUBLIC method (BERHASIL)
    echo "Saldo: " . $acc->getBalance("1234") . "\n"; 
    
    // 3. Mengakses PROTECTED property (ERROR)
    // echo "Saldo Langsung: " . $acc->balance . "\n"; 
    
    // 4. Mengakses PRIVATE property (ERROR)
    // echo "PIN Langsung: " . $acc->pin . "\n"; 
    
    // Pengujian PIN salah
    // echo "Saldo (PIN salah): " . $acc->getBalance("9999") . "\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>