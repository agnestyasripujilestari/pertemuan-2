<?php
class UserProfile {
    // Typed Property: harus String.
    public string $name; 
    
    // Nullable Typed Property: boleh String atau NULL.
    public ?string $address = null; 
    
    // Readonly Property: hanya bisa diisi sekali, biasanya di constructor.
    public readonly int $id;

    public function __construct(int $id, string $name, ?string $address = null) {
        $this->id = $id; // Inisialisasi properti readonly
        $this->name = $name;
        $this->address = $address;
    }
}

$u = new UserProfile(101, "Agnes");

// Akses properti Readonly dan Typed
echo "ID: " . $u->id . "\n";
echo "Nama: " . $u->name . "\n";

// Mengubah properti non-readonly (berhasil)
$u->name = "Agnestya";
echo "Nama Baru: " . $u->name . "\n";

// Contoh Error (Jangan Dijalankan): 
// $u->id = 202; // Akan Fatal Error: Cannot modify readonly property
// $u->name = 12345; // Akan Fatal Error: Must be of type string, int given
?>