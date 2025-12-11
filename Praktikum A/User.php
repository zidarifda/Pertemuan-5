<?php 
class User { 
    protected string $nama; 
    protected string $email; 

    public function __construct(string $nama, string $email) { 
        $this->nama = $nama; 
        $this->email = $email; 
    } 

    public function login(): void { 
        echo "{$this->nama} berhasil login.\n"; 
    } 
} 

class Admin extends User { 
    public function hapusUser(string $target): void { 
        echo "{$this->nama} menghapus akun {$target}.\n"; 
    } 
    public function info(){
    echo "Admin aktif: {$this->nama}\n";
}

}

$admin = new Admin("Iwan", "iwan@abc.com"); 
$admin->login(); 
$admin->hapusUser("Budi"); 
