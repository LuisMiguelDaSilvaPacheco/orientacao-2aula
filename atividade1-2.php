<?php

print "Você irá me dizer um número e eu direi seus antecessores\n";

$num = readline('Diga um número: ');

for ($num; $num > 0; $num--) { 
    print "$num, ";
}
