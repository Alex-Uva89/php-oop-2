<?php

include __DIR__ . '/prodottoGenerico.php';

class Antipulci extends ProdottoGenerico
{
    private $razzaAnimale;
    private $disponibilità;
    
    function __construct(string $_nome, float $_prezzo, string $_img ,$_razzaAnimale , $_disponibilità){
        parent::__construct($_nome, $_prezzo, $_img);
        $this->razzaAnimale = $_razzaAnimale;
        $this->disponibilità = $_disponibilità;
    }

    public function setRazzaAnimale($_razzaAnimale) {
        $this->razzaAnimale = $_razzaAnimale;
    }

    public function getRazzaAnimale() {
        return $this->razzaAnimale;
    }

    public function setDisponibilità($_disponibilità) {
        $this->disponibilità = $_disponibilità;
    }

    public function getDisponibilità() {
        return $this->disponibilità;
    }
}


$frontLine= new Antipulci("frontLine", 15.30, "https://picsum.photos/200","Labrador","Mese: Aprile");
// var_dump($frontLine);


?>

<html>
    <div>
        <h1><? $frontLine ?></h1>
    </div>
</html>
