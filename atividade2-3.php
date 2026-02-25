<?php

$num1 = readline('Diga um numero: ');
$num2 = readline('Diga outro numero: ');
$num3 = readline('Diga mais um numero: ');

if ($num1 < $num2 and $num1 < $num3) {
    print "O menor numero é o $num1\n";
}elseif ($num2 < $num1 and $num2 < $num3) {
    print "O menor numero é o $num2\n";
}
elseif ($num3 < $num1 and $num3 < $num2) {
    print "O menor numero é o $num3\n";
}