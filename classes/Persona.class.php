<?php

class Persona {

private string $nome;
private string $cognome;
private string $dataNascita;
private string $luogoNascita;
private string $codiceFiscale;
private string $email;

public function __construct(string $nome, string $cognome, string $dataNascita, string $luogoNascita, string $codiceFiscale, string $email) {

    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->dataNascita = $dataNascita;
    $this->luogoNascita = $luogoNascita;
    $this->codiceFiscale = $codiceFiscale;
    $this->email = $email;

      
}

public function getnome() : string {

    return $this->nome;
}

public function getcognome() : string {

    return $this->cognome;
}

public function getdataNascita(): string {

    return $this->dataNascita;
}

public function getluogoNascita(): string {

    return $this->luogoNascita;
}

public function getcodiceFiscale(): string {

    return $this->codiceFiscale;
}

public function getemail(): string {

    return $this->email;
}

public function setemail($email): void {

    $this->email = $email;
}

}
