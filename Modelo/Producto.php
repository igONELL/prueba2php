<?php 

class producto{

    private int $id;
    private string $nombre;
    private float $precio;
    private int $cantidad;

    public function __construct(int $id, string $nombre, float $precio, int $cantidad){
       $this->setId($id);
       $this->setNombre($nombre);
       $this->setPrecio($precio);
       $this->setCantidad($cantidad);

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->fecha = $id;
    }

    public function getNombre($nombre){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getPrecio($precio){
        return $this->precio;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function getCantidad($cantidad){
        return $this->nombre;
    }

    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }


}

?>