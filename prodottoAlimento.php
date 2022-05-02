<?php
include __DIR__ . '/prodottoGenerico.php';

class Cibo extends ProdottoGenerico 
{
    private $peso;
    private $tipo;
    
    function __construct(string $_nome, float $_prezzo, string $_img, float $_peso, string $_tipo){
        parent::__construct($_nome, $_prezzo, $_img);
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

$Shezir= new Cibo ("Shezir", 12.60, "https://picsum.photos/200", 3.50, "umido per gatti");
// var_dump($croccantini);

?>