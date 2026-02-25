<?php

for ($i = 0; $i <= 5; $i++) {

    $nome = readline('Diga seu nome (Completo): ');
    $peso = readline('Diga seu peso (Kg): ');
    $altura = readline('Diga sua altura (metros): ');

    $imc = $peso / ($altura * $altura);

    print "$nome, tem $peso Kg, $altura m e $imc de IMC\n\n";
}
