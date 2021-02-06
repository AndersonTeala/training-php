<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Anderderson Teala</title>
    </head>
    <body>

        <?php

            $name = Anderson;
            $idade = 30;
            $peso = 70;
        ?>

        <div>
            <h1>Informacoes sobre o aluno</h1>
            <p>Aluno: <?= $name?> </p>
            <p>Idade: <?= $idade?> </p>
            <p>Peso: <?= $peso?> </p>
        </div>

        <p>Tipo de treinamento:

        <?php
            if($idade >=22 && $idade <= 50 && $peso >=70) {
              echo 'Treinamento Pesado';
            } else if ($idade >= 40 && $idade <= 60 && $peso >= 50) {
              echo 'Treinamento Medio';
            } else if ($idade >=16 && $idade <= 22 && $peso >= 50 || $idade >=22 && $peso >= 50) {
              echo 'Treinamento Leve';
            } else if ($idade <=15) {
              echo 'Idade proibida para treinar';
            } else {
              echo 'Nao esta aptado para treinar';
            }

        ?>

        </p>
      
    </body>
</html>