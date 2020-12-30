<?php

class Tavolo {

private int $numero;
private int $postiMax;

public function __construct(int $numero, int $postiMax) {

    $this->numero = $numero;
    $this->postiMassimi = $postiMax;
      
}

public function getnumero() : int {

    return $this->numero;
}

public function setnumero($numero): void {

    $this->numero = $numero;
}

public function getpostiMax(): int {

    return $this->postiMax;
}

public function setpostoMax($postiMax): void {

    $this->postiMax = $postiMax;
}
}
