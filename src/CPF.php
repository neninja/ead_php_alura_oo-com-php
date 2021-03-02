<?php

class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->validaCpf($numero);
        $this->numero = $numero;
    }

    // THANKS: https://gist.github.com/rafael-neri/ab3e58803a08cb4def059fce4e3c0e40
    public function validaCpf(string $cpf)
    {
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            echo "Cpf inválido";
            exit();
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            echo "Cpf inválido";
            exit();
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                echo "Cpf inválido";
                exit();
            }
        }
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
}
