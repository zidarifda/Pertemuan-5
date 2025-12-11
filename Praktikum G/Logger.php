<?php
interface Logger { 
    public function log(string $pesan): void; 
} 

class FileLogger implements Logger { 
    public function log(string $pesan): void { 
        echo "Menulis ke file: $pesan\n"; 
    } 
} 

class ConsoleLogger implements Logger { 
    public function log(string $pesan): void { 
        echo "Menampilkan ke konsol: $pesan\n"; 
    } 
} 

class DatabaseLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menyimpan log ke database: $pesan\n";
    }
}

interface Saveable {
    public function save(): void;
}

class MultiLogger implements Logger, Saveable {
    public function log(string $pesan): void {
        echo "Log (multi): $pesan\n";
    }

    public function save(): void {
        echo "Data berhasil disimpan.\n";
    }
}

$db = new DatabaseLogger();
$db->log("Tes database");

$multi = new MultiLogger();
$multi->log("Tes MultiLogger");
$multi->save();
