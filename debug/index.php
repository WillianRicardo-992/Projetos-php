<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria as ContaBancaria;
 
$conta = new ContaBancaria();
var_dump($conta->exibirDadosDaConta());