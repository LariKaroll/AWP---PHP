<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function calcular($n1,$n2,$acao){
            if($acao == "somar"){
                $resultado = $n1+$n2;
                echo "<br> <center> $n1 + $n2 = $resultado</center>";
            }elseif($acao == "Subtracao"){
                $resultado = $n1-$n2;
                echo "<br> <center> $n1 - $n2 = $resultado</center> ";
            }elseif($acao == "Multiplicacao"){
                $resultado = $n1*$n2;
                echo "<br> <center> $n1 * $n2 = $resultado</center>";
            }elseif($acao == "Divisao"){
                $resultado = $n1/$n2;
                echo "<br> <center> $n1 / $n2 = $resultado</center>";
            }
        }
        
    ?>
</body>
</html>