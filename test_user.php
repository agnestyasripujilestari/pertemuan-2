<?php
require "User.php";

$u = new User(); // Membuat object baru
$u->name = "Rani"; // Mengisi property object
echo $u->sayHello(); // Memanggil method object
?>