<?php 


class Cliente {
    private int $phone;
    private string $nombre;
    private string $pass;
    
    public function __construct(int $phone, string $nombre, string $pass) {
        $this->setPhone($phone);
        $this->setNombre($nombre);
        $this->setPass($pass);
    }
    
    public function getPhone(){
        return $this->phone;
    }
    
    public function setPhone(int $phone){
        $this->phone = $phone;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
    
    public function getPass(){
        return $this->pass;
    }
    
    public function setPass(string $pass){
        $this->pass = $pass;
    }
}

?>