<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
}
