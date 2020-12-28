<?php

class Ordine {

    private int $numeroOrdine;
    private string $dataOra;
    private int $numeroTavolo;
    private string $nominativo;
    private int $numeriCoperti;
    private array $menuTotale;

    public function __construct(int $numeroOrdine, string $dataOra, int $numeroTavolo, string $nominativo, int $numeriCoperti, array $menuTotale) {
        $this->numeroOrdine = $numeroOrdine;
        $this->dataOra = $dataOra;
        $this->numeroTavolo = $numeroTavolo;
        $this->nominativo = $nominativo;
        $this->numeriCoperti = $numeriCoperti;
        $this->menuTotale = $menuTotale;
    }

    public function getNumeroOrdine(): int {
        return $this->numeroOrdine;
    }

    public function getDataOra(): string {
        return $this->dataOra;
    }

    public function getNumeroTavolo(): int {
        return $this->numeroTavolo;
    }

    public function setNumeroTavolo(int $numeroTavolo): void {
        $this->numeroTavolo = $numeroTavolo;
    }

    public function getNominativo(): string {
        return $this->nominativo;
    }

    public function setNominativo(string $nominativo): void {
        $this->nominativo = $nominativo;
    }

    public function getNumeriCoperti(): int {
        return $this->numeriCoperti;
    }

    public function setNumeriCoperti(int $numeriCoperti): void {
        $this->numeriCoperti = $numeriCoperti;
    }

    public function setMenuTotale(array $menuTotale): void {
        $this->menuTotale = $menuTotale;
    }

    public function getMenuTotale(): array {
        return $this->menuTotale;
    }

}