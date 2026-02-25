<?php

print "Eu pedirei 10 numeros, um de cada vez, então te darei a resposta se ele é positivo ou negativo\n";

for ($vezes = 0; $vezes < 10; $vezes++) {
    $num = readline("Diga o numero: ");

    if ($num >= 0) {
        print "Seu numero é positivo\n";
    } else {
        print "Seu numero é negativo\n";
    }
}
