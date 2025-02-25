<?php

function teste($x){
    foreach ($x as $nome) {
        echo "$nome <br>";
    }
}

$vetor = ['Tiago', 'Rafaela', 'ETEC'];

teste($vetor);

?>