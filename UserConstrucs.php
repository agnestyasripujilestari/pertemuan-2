<?php
// Class yang menggunakan fitur Property Promotion (PHP 8+)
class UserConstruct {
    // Property Promotion: 
    // Property $name dan $age otomatis dibuat, bertipe, dan diisi dari parameter constructor.
    public function __construct(
        public string $name, // Property dibuat otomatis
        public int $age      // Property dibuat otomatis
    ) {}
    
    public function introduce(): string {
        return "Halo, saya {$this->name} dan umur saya {$this->age} tahun.";
    }
}
?>