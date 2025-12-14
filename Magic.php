<?php
class Magic {
    // __call: Dipanggil ketika method non-existent (tidak ada) dipanggil.
    public function __call($name, $args) {
        return "Method '$name' dipanggil dengan argumen: " . implode(", ", $args);
    }
    
    // __toString: Dipanggil ketika object diperlakukan sebagai string.
    public function __toString(): string { 
        return "Ini adalah objek Magic";
    }
}

$m = new Magic();

// Memanggil method yang tidak ada (akan memanggil __call)
echo $m->hello("Rani", 25); 
echo "\n";

// Memperlakukan object sebagai string (akan memanggil __toString)
echo $m; 
echo "\n";
?>