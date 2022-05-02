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
    
    public function setScadenza($scadenza) {
        $now = date('Y/m/d');
        if( $scadenza >= $now ){
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

$cartaUva= new CartaCredito('1234567891234567', 'Che Banca', '0000-00-00' , 'Ale Uva', '123');
$cartaUva->setScadenza('2023-01-01');

var_dump ($cartaUva);