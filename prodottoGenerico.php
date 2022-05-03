<?php


class ProdottoGenerico
{
    protected $barcode;
    protected $nome;
    protected $descrizione;
    protected $immagine;
    protected $brand;
    protected $prezzo;
    
    public function __construct($barcode, $nome, $prezzo, $immagine){
        $this->barcode = $barcode;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of immagine
     */ 
    public function getImmagine()
    {
        return $this->immagine;
    }

    /**
     * Get the value of barcode
     */ 
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set the value of barcode
     *
     * @return  self
     */ 
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }
}

?>