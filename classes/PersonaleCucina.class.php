<?php
class PersonaleCucina extends Persona {

private string $mansione;


public function __construct(string $nome, string $cognome, string $dataNascita, string $luogoNascita, string $codiceFiscale, string $email, string $mansione) {
    parent::__construct( $nome,  $cognome,  $dataNascita,  $luogoNascita,  $codiceFiscale, $email);

    $this->mansione = $mansione;
    
}

public function getmansione(): string {

    return $this->mansione;
}

public function setmansione($mansione): void {

    $this->mansione = $mansione;
}



}