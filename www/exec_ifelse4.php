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

            $nome = 'Anderson';
            $sobrenome = 'Teala';
            $idade = 25;
            $notaPortugues = 4;
            $notaMatematica = 4;
            $notaIngles = 4;
            $notaFilosofia = 4;
            $passaAno = true;
            $passaDp = true;
            $chancePassaAno = true;

            $somaNota = $notaPortugues + $notaMatematica + $notaIngles + $notaFilosofia;
            $divideNota = $somaNota / 4;
            $totalNota = $divideNota;

            if ($divideNota >= 7){
              $passaDp = false;
              $chancePassaAno = false;
            } else if ($divideNota >= 4 && $divideNota <= 6){
              $chancePassaAno = false;
            } else{
              $passaAno = false;
              $passaDp = false;
              $chancePassaAno = false;
            }
        ?>

        <h1>Informações sobre aluno:</h1>
        <p>Aluno: <?= $nome . ' ' . $sobrenome?></p>
        <p>Idade: <?= $idade ?></p>
        
        <h2>Notas:</h2>
        <p>Portugues: <?= $notaPortugues ?></p>
        <p>Matemática: <?= $notaMatematica ?></p>
        <p>Inglês: <?= $notaIngles ?></p>
        <p>Filosófia: <?= $notaFilosofia ?></p>
        <h3>Nota total: <?= $totalNota?></h3>

        <h3>Detalhes:</h3>
        <p>Passou de ano: <?= $passaAno ? 'SIM' : 'NÃO'; ?> 
        <p>Passou com DP: <?= $passaDp ? 'SIM' : 'NÃO'; ?></p>
        <p>Chance de fazer a prova: <?= $chancePassaAno ? 'SIM' : 'NÃO'; ?></p>

    </body>
</html>