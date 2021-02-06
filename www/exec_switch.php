<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anderson Teala</title>
</head>
<body>

<h1>SISTEMA DE ACADEMIA</h1>

    <?php
        $name = Anderson;
        $idade_proibida = 16 ;
    ?>

  <h2>Informacoes sobre o aluno</h2>
        <p>Aluno: <?= $name?></p>
        <p>Idade: <?= $idade_proibida?></p>
  <h3>Pode treinar:
        <?php 
            switch ($idade_proibida <= 15) {
              case true;
                  echo 'NAO PODE TREINAR';
                break;
  
              case false;
                echo 'PODE TREINAR';
                break;
        }
        ?>
  </h3>
  
</body>
</html>