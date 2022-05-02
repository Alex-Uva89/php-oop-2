<?php

include __DIR__ . '/utenteStandard.php';

class UtenteRegistrato extends UtenteStandard
{
    private $mail;
    private $usarname;
    private $password;

    public function __construct($_utenteId, $_utenteNome, $_utenteCognome, $_utenteIndirizzo, $_mail, $_usarname, $_password){
        parent::__construct($_utenteId, $_utenteNome, $_utenteCognome, $_utenteIndirizzo);
        $this->mail = $_mail;
        $this->usarname = $_usarname;
        $this->password = $_password;
    }
    
    public function setMail($_mail) {
        $this->mail = $_mail;
        return $this;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setUsarname($_usarname) {
        $this->usarname = $_usarname;
        return $this;
    }

    public function getUsarname() {
        return $this->usarname;
    }

    public function setPassword($_password) {
        $this->password = $_password;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

}

$utente2 = new UtenteRegistrato(2, "Alessandro", "Uva", "Via Università, 51", "mario.rossi@hotmail.it", "Zuccherino89", "0000");
$utente2->setCarta("1234567891234567","un altra banca","20 September 2024","Mario Rossi",456);
var_dump($utente2);