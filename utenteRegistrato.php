<?php
include_once __DIR__ . '/utenteStandard.php';

class UtenteRegistrato extends UtenteStandard
{
    protected $mail;
    protected $usarname;
    protected $password;
    protected $discount = 20;

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

