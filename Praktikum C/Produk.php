<?php

class Produk {
    protected string $nama; 
    protected int $harga; 

    public function __construct(string $nama, int $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getHarga(): int {
        return $this->harga;
    }
}

class ProdukDiskon extends Produk { 
    private float $diskon; 

    public function __construct(string $nama, int $harga, float $diskon) {
        parent::__construct($nama, $harga);
        $this->diskon = $diskon;
    } 

    public function getHarga(): int {
        $hargaAsli = parent::getHarga(); 
        return (int) ($hargaAsli * (1 - $this->diskon));
    }
}

// Eksperimen tambahan 1:
class ProdukDiskonGanda extends Produk {
    private float $diskon1;
    private float $diskon2;

    public function __construct(string $nama, int $harga, float $diskon1, float $diskon2) {
        parent::__construct($nama, $harga);
        $this->diskon1 = $diskon1;
        $this->diskon2 = $diskon2;
    }

    public function getHarga(): int {
        $harga = parent::getHarga();
        $harga -= $harga * $this->diskon1;
        $harga -= $harga * $this->diskon2;
        return (int) $harga;
    }
}

// Eksperimen tambahan 2:
class ProdukPromo extends ProdukDiskon {
    private float $promoTambahan;

    public function __construct(string $nama, int $harga, float $diskon, float $promoTambahan) {
        parent::__construct($nama, $harga, $diskon);
        $this->promoTambahan = $promoTambahan;
    }

    public function getHarga(): int {
        $harga = parent::getHarga(); 
        return (int) ($harga * (1 - $this->promoTambahan));
    }
}

$laptop = new ProdukDiskon("Laptop", 10000000, 0.15);
echo "Harga setelah diskon (ProdukDiskon): Rp" . $laptop->getHarga() . "\n";

// OUTPUT EKSPERIMEN TAMBAHAN
$barang1 = new ProdukDiskonGanda("Monitor", 2000000, 0.10, 0.05);
echo "Harga Monitor setelah diskon ganda: Rp" . $barang1->getHarga() . "\n";

$barang2 = new ProdukPromo("Keyboard", 500000, 0.10, 0.05);
echo "Harga Keyboard dengan diskon + promo: Rp" . $barang2->getHarga() . "\n";
