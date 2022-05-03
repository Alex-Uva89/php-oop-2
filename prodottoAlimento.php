<?php
include_once __DIR__ . '/prodottoGenerico.php';

class Cibo extends ProdottoGenerico 
{
    protected $peso;
    protected $tipo;
    
    public function __construct(string $barcode, string $nome, float $prezzo, string $immagine, float $_peso, string $_tipo){
        parent::__construct($barcode, $nome, $prezzo, $immagine);
        $this->peso = $_peso;
        $this->tipo = $_tipo;
    }

    public function setPeso($_peso) {
        $this->peso = $_peso;
        return $this;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setTipo($_tipo) {
        $this->tipo = $_tipo;
        return $this;
    }

    public function getTipo() {
        return $this->tipo;
    }
}



?>