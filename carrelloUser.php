<?php
include __DIR__ . '/prodottoGenerico.php';
include_once __DIR__ . '/prodottoAlimento.php';
include_once __DIR__ . '/prodottoAntipulci.php';

class CarrelloUser {
    public $listaProdotti = [];
    public $totale;

    public function aggiungiProdotto($_nome, $_prezzo, $_img){
        array_push($this->listaProdotti, new ProdottoGenerico($_nome, $_prezzo, $_img));
        $this->totale += $_prezzo;
    }
}

$carrello = new CarrelloUser;
$carrello->aggiungiProdotto("lettieraAutopulente", 12.40, "https://picsum.photos/200");
$carrello->aggiungiProdotto("frontLine", 15.30, "https://picsum.photos/200");
$carrello->aggiungiProdotto("Shezir", 12.60, "https://picsum.photos/200");

//var_dump($carrello);