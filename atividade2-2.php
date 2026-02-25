<?php

$valor = 0;
$valorArrecadado = 0;

do {
    $valor = readline("Digite um valor para ajudar, 0 para cancelar: ");
    $valorArrecadado += $valor;
} while ($valor != 0);

print "O valor total arrecadado foi R$$valorArrecadado,00 \n";