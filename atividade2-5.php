<?php

$num1 = readline('Diga um numero: ');
$num2 = readline('Diga outro numero: ');

for ($i=$num1; $i < $num2; $i++) { 
    if ($i % 5 == 0) {
        print "$i\n";
    }
}