<?php

$n1 = readline("Ingrese el número 1: ");
$n2 = readline("Ingrese el número 2: ");
$n3 = readline("Ingrese el número 3: ");

if ($n1 > $n2 && $n1 > $n3) {
    print("el número ".$n1." es el mayor \n" );
}

elseif ($n2 > $n1 && $n2 > $n3) {
    print("el número ".$n2." es el mayor  \n");
}

elseif ($n3 > $n1 && $n3 > $n2) {
    print("el número ".$n3." es el mayor  \n");
}

if ($n1 < $n2 && $n1 < $n3) {
    print("el número ".$n1." es el menor  \n");
}
elseif ($n2 < $n1 && $n2 < $n3) {
    print("el número ".$n2." es el menor  \n");
}
elseif ($n3 < $n2 && $n3 < $n1) {
    print("el número ".$n3." es el menor  \n");
}



?>