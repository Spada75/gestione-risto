<?php

class Menu {

    private string $nome;
    private string $descrizione;
    private float $prezzo;
    private string $tipo;
    private int $quantita;

    public function __construct(string $nome, string $descrizione, float $prezzo, string $tipo, int $quantita) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->tipo = $tipo;
        $this->quantita = $quantita;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getDescrizione(): string {
        return $this->descrizione;
    }

    public function setDescrizione(string $descrizione): void {
        $this->descrizione = $descrizione;
    }

    public function getPrezzo(): float {
        return $this->prezzo;
    }

    public function setPrezzo(float $prezzo): void {
        $this->prezzo = $prezzo;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }

    public function getQuantita(): int {
        return $this->quantita;
    }

    public function setQuantita(int $quantita): void {
        $this->quantita = $quantita;
    }

}