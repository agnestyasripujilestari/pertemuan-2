<?php
require "UserConstrucs.php";

// Membuat object dan langsung mengisi property $name dan $age 
// tanpa perlu mengisi $u->name = "..." secara manual.
$u = new UserConstruct("Rani", "dua puluh");
// Mengakses method
echo $u->introduce() . "\n";

// Mengakses property yang sudah terisi
echo "Nama dari property: " . $u->name . "\n";
echo "Umur dari property: " . $u->age . "\n";
?>