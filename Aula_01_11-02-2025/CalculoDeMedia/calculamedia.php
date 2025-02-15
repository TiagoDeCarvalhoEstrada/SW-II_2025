<?php
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;

    echo "Nota 1: ". $nota1 . "<br>";
    echo "Nota 2: ". $nota2 . "<br>";
    echo "Nota 3: ". $nota3 . "<br>";
  

    $notamedia = ($nota1 + $nota2 + $nota3) / 3;

        if ($notamedia >= 6 ){
            echo "media: ". $notamedia . ". Aprovado!";
        } else {
            echo "media: ". $notamedia . ". reprovado!";
        }
    

?>