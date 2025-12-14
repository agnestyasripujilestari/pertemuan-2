<?php
class Builder {
    private string $text = "";
    
    // Method add() mengembalikan $this (self)
    public function add(string $s): self {
        $this->text .= $s; 
        return $this; // Kunci dari Fluent Interface
    }
    
    // Eksperimen: Method upper() juga mengembalikan $this (self)
    public function upper(): self {
        $this->text = strtoupper($this->text);
        return $this;
    }
    
    public function get(): string { 
        return $this->text;
    }
}

// Uji Chaining
$b = (new Builder())
    ->add("Halo ")
    ->add("Dunia"); 

echo "Hasil Builder 1: " . $b->get() . "\n";

// Uji Eksperimen
echo "Hasil Builder 2: " . (new Builder())
    ->add("halo ")
    ->add("dunia")
    ->upper() // Chaining method baru
    ->get() . "\n";
?>