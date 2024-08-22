<?php
    $nmay = 0;
    $nmen = INF;

for ($i=0; $i < 3; $i++) { 
    $n = readline("Ingresa número". ($i+1));

    if ($n > $nmay) {
        $nmay = $n;
    }

    if ($nmen > $n) {
        $nmen = $n;
    }
}

print('Mayor: '. $nmay. " menor: ". $nmen);

?>