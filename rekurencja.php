<?php

function rekurencja($i) {
    echo "rek start\n";
    if($i < 5) {
        $i++;
        rekurencja($i);
    }
    echo "rek stop\n";

}

echo "Start\n";

rekurencja(0);

echo "Koniec\n";