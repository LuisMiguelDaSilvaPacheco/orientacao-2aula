<?php

for ($vezes = 0; $vezes < 10; $vezes++) {
    $num = readline("Diga um numero: ");

    if ($num % 2 == 0) {
        print "Seu numero é par\n";
    } else {
        print "Seu numero é ímpar\n";
    }
}
