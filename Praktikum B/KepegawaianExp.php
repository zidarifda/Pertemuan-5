<?php

class Pegawai { 
    protected string $nama; 
    protected float $gajiDasar; 

    public function __construct(string $nama, float $gajiDasar) {  
        $this->nama = $nama; 
        $this->gajiDasar = $gajiDasar; 
    } 

    public function hitungGaji(): float { 
        return $this->gajiDasar; 
    } 
} 

class PegawaiTetap extends Pegawai { 
    protected float $tunjanganTetap = 2000000; //diubah untuk eksperimen

    public function hitungGaji(): float { 
        return parent::hitungGaji() + $this->tunjanganTetap;  
    } 
} 

class Manajer extends PegawaiTetap { 
    protected float $tunjanganJabatan = 2500000; //diubah

    public function hitungGaji(): float { 
        return parent::hitungGaji() + $this->tunjanganJabatan;  
    } 
}

class Direktur extends Manajer {
    protected float $tunjanganDirektur = 5000000;

    public function hitungGaji(): float {
        return parent::hitungGaji() + $this->tunjanganDirektur;
    }
}

$andi = new Direktur("Andi", 10000000);

echo "Gaji Direktur Andi: Rp" . $andi->hitungGaji() . "\n";
