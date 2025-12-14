<?php
class Account {
    public string $owner;       // PUBLIC: Dapat diakses dari luar class.
    protected float $balance;    // PROTECTED: Tidak dapat diakses langsung dari luar.
    private string $pin;         // PRIVATE: Tidak dapat diakses langsung dari luar.
    
    // Perbaikan typo: function construct seharusnya __construct
    public function __construct(string $owner, float $balance, string $pin) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->pin = $pin;
    }
    
    // Getter method untuk mengakses $balance yang protected/private.
    public function getBalance(string $pin): float {
        if ($pin === $this->pin) {
            return $this->balance;
        }
        // Lebih baik menggunakan Exception untuk error
        throw new Exception("PIN salah"); 
    }
}
?>