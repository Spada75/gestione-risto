<?php

class Cassiere extends Persona {

private string $amministratore;

public function __construct(string $nome, string $cognome, string $dataNascita, string $luogoNascita, string $codiceFiscale, string $email, string $amministratore) {
    parent::__construct( $nome,  $cognome,  $dataNascita,  $luogoNascita,  $codiceFiscale, $email);
  
    $this->amministratore = $amministratore;
      
}

public function getAmministratore(): string {

    return $this->amministratore;
}

public function setAmministratore($amministratore): void {

    $this->amministratore = $amministratore;
}

}
