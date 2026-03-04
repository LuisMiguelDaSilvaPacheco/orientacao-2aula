<?php

$qntPar = 0;
$qntImpar = 0;

for ($vezes = 0; $vezes < 10; $vezes++) {
    $num = readline("Diga um numero: ");

    if ($num % 2 == 0) {
        $qntPar++;
    } else {
        $qntImpar++;
    }

    print("Você disse $qntPar números pares e $qntImpar números ímpares");
}
