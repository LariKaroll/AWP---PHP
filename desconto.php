<html>
    <head>
        <title>Valor das parcelas</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <center>
            <h1><?php 
                function calcular($n1,$n2){
                    if($n2 <= 1){
                        $nd = $n1 * 0.10;
                        $nt = $n1 - $nd;
                        echo("Valor a pagar : R$$nt");
                    }elseif($n2 > 0 && $n2 < 4){
                        $nd = $n1 * 0.05;
                        $nt = $n1 - $nd;
                        echo("Valor a pagar : R$$nt");
                    }elseif($n2 >= 4){
                        $nd = $n1 * 0.10;
                        $nt = $n1 + $nd;
                        echo("Valor a pagar : R$$nt");
                    }else{
                        echo("Tente novamente");
                    }
                }

                calcular($n1 = $_POST["n1"], $n2 = $_POST["n2"]);
            ?>
            <br>
            <a href="site.php">Voltar</a>
        </h1>
        </center>
    </body>
</html>



faça um programa em php que receba como dado de entrada:
o nome e a idade de varias pessoas.
resultado : 

a - nome e idade da pessoa mais velha.
b - a soma das idades digitadas.