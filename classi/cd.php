<?php


include_once __DIR__ . '/prodotto.php';

class Cd extends Prodotto
{

    public $durata;
    public $anno;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        Bool $pubblicato,
        String $immagine,

        Int $durata,
        Int $anno

    ) {

        $this->durata = $durata;
        $this->anno = $anno;

        parent::__construct($nome, $autore, $prezzo, $generi, $pubblicato, $immagine);
    }
}