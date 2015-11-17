<!DOCTYPE html>
<!--

@author:Daniel
Aprendendo php primeira aula Variaveis e msgboxes

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <div>
            <?php
            include(Classephp . php);

            $tempclasse = new Classephp();
            $tempclasse->nome = "Daniel";
            $tempclasse->idade = 10;

            $tempclasse->Defunto();
            $nome = array("Daniel", "Fernandes", "dos", "Santos");
            $idade = 3;

            foreach ($nome as $value) {


                echo "$value <br>";
            }

            for ($i = 0; $i <= 10; $i++) {

                echo "Teste de logica </b>" + $i;
            }
            echo "Teste !", $idade, "<br/>";
            ?>
        </div>



    </body>
</html>
