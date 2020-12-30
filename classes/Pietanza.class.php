<?php


class Pietanza extends Menu {

    private string $tipo;
    private string $nome;
    private string $descrizione;
    private float $prezzo;
    
    public function __construct(int $stock, int $quantita, string $tipo, string $nome, string $descrizione, float $prezzo) {
        parent::__construct( $stock, $quantita);

        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        
    }

    public function getTipo() :string {

        return $this->tipo;
    }

    public function setTipo($tipo): void {

        $this->tipo = $tipo;
    }

    public function getNome(): string {

        return $this->nome;
    }

    public function setNome($nome): void {

        $this->nome = $nome;
    }

    public function getDescrizione(): string {

       return $this->descrizione;
    }

    public function setDescrizione($descrizione): void {

        $this->descrizione = $descrizione;
    }

    public function getPrezzo(): float {

        return $this->prezzo;
    }

    public function setPrezzo($prezzo): void {

        $this->prezzo = $prezzo;
    }

}

