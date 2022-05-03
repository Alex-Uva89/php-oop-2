<?php

include_once __DIR__ . '/utenteRegistrato.php';
include_once __DIR__ . '/utenteStandard.php';
include_once __DIR__ . '/prodottoGenerico.php';

$utente2 = new UtenteRegistrato(2, "Alessandro", "Uva", "Via Università, 51", "mario.rossi@hotmail.it", "Zuccherino89", "0000");
$utente2->setCarta("1234567891234567","un altra banca","20 September 2024","Mario Rossi",456);
var_dump($utente2);

$utente1 = new UtenteStandard(1, "Mario", "Rossi", "Via le mani di qua, 1");
$utente1->setCarta("1234567891234567","banca","2024-09-01","Mario Rossi",456);
var_dump($utente1);

$Shezir= new Cibo ("bhak48askall2","Shezir", 12.60, "https://picsum.photos/200", 3.50, "umido per gatti");
var_dump($Shezir);

$frontLine= new Antipulci("bjdia38kjjkz48","frontLine", 15.30, "https://picsum.photos/200","Labrador","Mese: Aprile");
var_dump($frontLine);

?>