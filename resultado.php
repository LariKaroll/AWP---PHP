<?php 
    function maior($n1, $n2, $n3){
        if($n1 > $n2 && $n1 > $n3){
            echo"Valor 1 = $n1 é o maior";
        }elseif($n2 > $n1 && $n2 > $n3){
            echo"Valor 2 = $n2 é o maior";
        }else{
            echo"Valor 3 = $n3 é o maior";
        }
    }
?>