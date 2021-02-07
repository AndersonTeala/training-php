<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AndersonTeala</title>
</head>
<body>

    <?php

        function exibirBoasVindas() {
            echo 'Bem-vindo ao meu site!<br/>';
        }

        exibirBoasVindas();

      function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura + $comprimento;
            return $area;
      }
      
      $resultado = calcularAreaTerreno(5, 5);
      echo $resultado;

    ?>
  
</body>
</html>