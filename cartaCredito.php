<?php

Class CartaCredito {
   private $numero;
   private $banca;
   private $scadenza;
   private $anagrafica;
   private $cvc;

    function __construct($_numero, $_banca, $_scadenza, $_anagrafica, $_cvc) {
        $this->numero = $_numero;
        $this->banca = $_banca;
        $this->scadenza = $_scadenza;
        $this->anagrafica = $_anagrafica;
        $this->cvc = $_cvc;
    }

    public function setNumero($_numero) {
        $this->numero = $_numero;
        return $this;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setBanca($_banca) {
        $this->banca = $_banca;
        return $this;
    }

    public function getBanca() {
        return $this->banca;
    }
    
    public function setScadenza($_scadenza) {
        $now = date('d/m/Y');
        if( $_scadenza < $now ){
             $this->scadenza = 'la carta è valida';
        } else {
            $this->scadenza = 'la carta è scaduta';
        }
        return $this;
    }

    public function getScadenza() {
        return $this->scadenza;
    }

    public function setanagrafica($_anagrafica) {
        $this->anagrafica = $_anagrafica;
        return $this;
    }

    public function getanagrafica() {
        return $this->anagrafica;
    }

    public function setCvc($_cvc) {
        $this->cvc = $_cvc;
        return $this;
    }

    public function getCvc() {
        return $this->cvc;
    }
}

$cartaUva= new CartaCredito('1234567891234567', 'Nome Banca', '2023-09-01', 'Ale Uva', '123');
$cartaUva->setScadenza('01/09/2023');

var_dump ($cartaUva);