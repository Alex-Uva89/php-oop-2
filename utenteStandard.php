<?php
include __DIR__ . '/cartaCredito.php';

class UtenteStandard
{
    protected $utenteId;
    protected $utenteNome;
    protected $utenteCognome;
    protected $utenteIndirizzo;
    protected $utenteMetodoPagamento= []; 

    public function __construct($_utenteId, $_utenteNome, $_utenteCognome, $_utenteIndirizzo){
        $this->utenteId = $_utenteId;
        $this->utenteNome = $_utenteNome;
        $this->utenteCognome = $_utenteCognome;
        $this->utenteIndirizzo = $_utenteIndirizzo;
    }

    public function setUtenteId($_utenteId) {
        $this->utenteId = $_utenteId;
        return $this;
    }

    public function getUtenteId() {
        return $this->utenteId;
    }

    public function setUtenteNome($_utenteNome) {
        $this->utenteNome = $_utenteNome;
        return $this;
    }

    public function getUtenteNome() {
        return $this->utenteNome;
    }

    public function setUtenteCognome($_utenteCognome) {
        $this->utenteCognome = $_utenteCognome;
        return $this;
    }

    public function getUtenteCognome() {
        return $this->utenteCognome;
    }

    public function setUtenteIndirizzo($_utenteIndirizzo) {
        $this->utenteIndirizzo = $_utenteIndirizzo;
        return $this;
    }

    public function getUtenteIndirizzo() {
        return $this->utenteIndirizzo;
    }

    function setCarta($_numero, $_banca, $_scadenza, $_proprietario, $_cvc){
        array_push($this->utenteMetodoPagamento, 
        new CartaCredito($_numero, $_banca, $_scadenza, $_proprietario, $_cvc));
    }


}

$utente1 = new UtenteStandard(1, "Mario", "Rossi", "Via le mani di qua, 1");
$utente1->setCarta("1234567891234567","banca","2024-09-01","Mario Rossi",456);
//var_dump($utente1);
