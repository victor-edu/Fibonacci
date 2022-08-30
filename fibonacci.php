

<?php
    $quantidade=10;
    $resultado=1;
    $ResultadoAnterior=0;
    $fibonacci=0;

    for ($i=1; $i <=$quantidade -1 ; $i++) { 

        $fibonacci=$resultado+$ResultadoAnterior;
        
        echo "$fibonacci, ";

        $resultado=$ResultadoAnterior;
        $ResultadoAnterior=$fibonacci;

    }
?>