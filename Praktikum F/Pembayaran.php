<?php 
abstract class Pembayaran { 
    protected int $jumlah; 

    public function __construct(int $jumlah) { 
        $this->jumlah = $jumlah; 
    } 

    abstract public function proses(): void; 
} 

class TransferBank extends Pembayaran { 
    public function proses(): void { 
        echo "Transfer sebesar Rp{$this->jumlah} berhasil.\n";  
    } 
} 

class EWallet extends Pembayaran { 
    public function proses(): void { 
        echo "Pembayaran Rp{$this->jumlah} via E-Wallet berhasil.\n";  
    } 
} 

$transaksi = [
    new TransferBank(250000), 
    new EWallet(100000) 
]; 

foreach ($transaksi as $p) { 
    $p->proses(); 
}
