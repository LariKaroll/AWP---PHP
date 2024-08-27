<html>
    <head>

    </head>
    <body>
        <?php 
            function SomaIdade($idade){
                $idadeT = $idade;
                echo("Idade Total : $idadeT");
            }

            function NomeAndIdade($idade, $nome){
                $maioridade = $idade;
                if($idade > $maioridade){
                    
                }
            }

            SomaIdade($idade = $_POST["idade"]);
            
        ?>
        <br>
        <a href="FormNomeIdade.php">Voltar</a>
    </body>
</html>