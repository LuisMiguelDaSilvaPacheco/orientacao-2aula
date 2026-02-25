<?php

$num = readline('Diga um numero: ');

if ($num >= 0) {
    $num = $num * 2;
    print "$num \n";
} else {
    $num = $num * 3;
    print "$num \n";
}
