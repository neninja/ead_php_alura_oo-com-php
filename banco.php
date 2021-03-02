<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaSaldo();
echo $primeiraConta->recuperaCpfTitular();

$segundaConta = new Conta('698.549.548-10', 'Patricia');
var_dump($segundaConta);
