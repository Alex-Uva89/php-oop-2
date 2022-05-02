<?php

class ProdottoGenerico
{
    protected string $prodottoNome;
    protected float $prodottoPrezzo;
    protected int $prodottoSconto = 0;
    protected string $prodottoImg;

    function __construct(string $_nome, float $_prezzo, string $_img) {
        $this->prodottoNome = $_nome;
        $this->prodottoPrezzo = $_prezzo;
        $this->prodottoSconto = 0;
        $this->prodottoImg = $_img;
    }
    
    public function setProdottoNome($_nome) {
        $this->prodottoNome = $_nome;
        return $this;
    }

    public function getProdottoNome() {
        return $this->prodottoNome;
    }

    public function setProdottoPrezzo($_prezzo) {
        $this->prodottoPrezzo = $_prezzo;
        return $this;
    }

    public function getProdottoPrezzo() {
        return $this->prodottoPrezzo;
    }

    public function setProdottoSconto($_sconto) {
        $this->prodottoSconto = $_sconto;
        return $this;
    }

    public function getProdottoSconto() {
        return $this->prodottoSconto;
    }

    public function setProdottoImg($_img) {
        $this->prodottoImg = $_img;
        return $this;
    }

    public function getProdottoImg() {
        return $this->prodottoImg;
    }
}

$lettieraAutopulente = new ProdottoGenerico("lettieraAutopulente", 12.40, "https://picsum.photos/200");
// var_dump($cuccia);
