<?php

include_once __DIR__ . '/prodotto.php';

class Dvd extends Prodotto
{
    public $time;
    public $cover;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        Bool $pubblicato,
        String $immagine,

        Int $time,
        String $cover
    ) {
        $this->time = $time;
        $this->cover = $cover;
        parent::__construct($nome, $autore, $prezzo, $generi, $pubblicato, $immagine);
    }
}