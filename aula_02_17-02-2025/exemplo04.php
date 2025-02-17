<?php
//$contador = 0;
//while ($contador < 5) {
//    echo "Número : $contador ";
//    $contador++;
//}
//
//for ($i = 0; $i < 5; $i++) {
//    echo "Número: $i ";
//}

$nomes = ['Ana', 'Bruno', 'Carlos'];
//foreach ($nomes as $nome) {
    $qtde = count($nomes);

    echo "Elementos: $qtde <br>";

    for ($i=0;$i<$qtde;$i++){
        echo $nomes[$i] . "<br>";
    }

    echo $nomes[1];
//}


?>