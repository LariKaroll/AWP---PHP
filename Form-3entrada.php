<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('resultado.php')?>
</head>
<body>
    <form action="" method="post">
        <center>
            <fieldset>
                Valor 1 : <input type="text" name="n1" id="n1"> <br> <br>
                Valor 2 : <input type="text" name="n2" id="n2"> <br> <br>
                Valor 3 : <input type="text" name="n3" id="n3"> <br> <br>
                <button type="submit" name="acao">Enviar</button> <br> <br>

                <?php maior(@$_POST["n1"],@$_POST["n2"],@$_POST["n3"]);?>
            </fieldset>
        </center>
    </form>
</body>
</html>