<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <?php 
        function calcular($n1,$n2){
            if($n2 <= 1){
                $nd = $n1 * 0.10;
                $nt = $n1 -$nd;
                echo("Valor a pagar: R$$nt");
            }elseif($n2 > 0 && $n2 < 4 ){
                $nd = $n1 * 0.05;
                $nt = $n1 - $nd;
                echo("Valor a pagar: R$$nt");
            }elseif($n2 >= 4){
                $nd = $n1 * 0.10;
                $nt = $n1 + $nd;
                echo("Valor a pagar: R$$nt");
            }else{
                echo("Tente novamente!");
            }
        }

        calcular($n1 = $_POST["n1"],$n2 = $_POST["n2"]);
    
    ?>

</body>
</html>