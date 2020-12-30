<?php

class Cameriere extends Persona {

private array $numeriTavoli;

public function __construct(string $nome, string $cognome, string $dataNascita, string $luogoNascita, string $codiceFiscale, string $email, array $numeriTavoli) {
    parent::__construct( $nome,  $cognome,  $dataNascita,  $luogoNascita,  $codiceFiscale, $email);
  
    $this->numeriTavoli = $numeriTavoli;
      
}

public function getnumeriTavoli(): array {

    return $this->numeriTavoli;
}

public function setnumeriTavoli($numeriTavoli): void {

    $this->numeriTavoli = $numeriTavoli;
}

}
