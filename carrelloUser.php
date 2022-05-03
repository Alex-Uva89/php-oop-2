<?php
include_once __DIR__ . '/prodottoGenerico.php';
include_once __DIR__ . '/prodottoAlimento.php';
include_once __DIR__ . '/prodottoAntipulci.php';
include_once __DIR__ . '/utenteStandard.php';
include_once __DIR__ . '/cartaCredito.php';

class CarrelloUser{
    protected $listaProdotti = [];
    protected $cartaCredito;
    protected UtenteStandard $utenteStandard;
    protected $totale;

}
