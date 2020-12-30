<?php

class Menu {
    
    private int $stock;
    private int $quantita;

    public function __construct(int $stock, int $quantita) {

        $this->stock = $stock;
        $this->quantita = $quantita;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function setStock (int $stok): void {
        $this->stock = $stok;
    }
    
    public function getQuantita(): int {
        return $this->quantita;
    }

    public function setQuantita(int $quantita): void {
        $this->quantita = $quantita;
    }

}