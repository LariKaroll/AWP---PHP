<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('resultadoCalculadora.php') ?>
</head>
<body>
    <?php
        include('menu.php')
    ?>
    <form action="" method="post">
        <center>
            <fieldset>
                <h1>Calculadora</h1>
                Valor 1 = <input type="text" name="n1" id="n1"> <br><br>
                valor 2 = <input type="text" name="n2" id="n2"> <br> <br>
                <button type="submit" name="acao" value="somar">Somar</button>
                <button type="submit" name="acao" value="Subtracao">Subtracao</button>
                <button type="submit" name="acao" value="Multiplicacao">Multiplicacao</button>
                <button type="submit" name="acao" value="Divisao">Divisao</button> <br>

                <?php calcular(@$_POST["n1"],@$_POST["n2"],@$_POST["acao"]);?>
            </fieldset>
        </center>
    </form>
</body>
</html>