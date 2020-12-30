<?php
class Cliente extends Persona {

private int $numeroTavolo;
private int $numeroOrdine;

public function __construct(string $nome, string $cognome, string $dataNascita, string $luogoNascita, string $codiceFiscale, string $email, int $numeroTavolo, int $numeroOrdine) {
    parent::__construct( $nome,  $cognome,  $dataNascita,  $luogoNascita,  $codiceFiscale, $email);

    $this->numeroTavolo = $numeroTavolo;
    $this->numeroOrdine = $numeroOrdine;
    
}

public function getnumeroTavolo(): int {

    return $this->numeroTavolo;
}

public function setnumeroTavolo($numeroTavolo): void {

    $this->numeroTavolo = $numeroTavolo;
}

public function getnumeroOrdine(): int {

    return $this->numeroOrdine;
}

}

