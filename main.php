<?php

$graf = [];

$graf[1] = [2,3,4];
$graf[2] = [3];
$graf[3] = [5];
$graf[4] = [5,1];
$graf[5] = [];

function dfs(&$draf, $wezel){
    if(isset($graf[$wezel])){
        echo "$wezel :: ";
        foreach($graf[$wezel] as $skok){
            dfs($graf, $skok);
        }
        echo "\n"
    }
}

?>