<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Titular(new CPF('797.828.800-51'), 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('771.426.240-00'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('003.247.790-20'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
