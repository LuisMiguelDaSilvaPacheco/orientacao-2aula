<?php

$num1 = readline('Diga um numero: ');
$num2 = readline('Diga outro numero: ');
$produto = 0;

for ($i = 0; $i < $num2; $i++) {
    $produto += $num1;
}

print "$produto \n";
