<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo imposto de renda exercicio</title>
</head>
<body>

    <?php

    function calcularImpostoRenda($salario) {

        $imposto = 0;

        if($salario <= 1903.98) {
          $imposto =0;
        }else if ($salario >= 1203.99 && $salario <= 2826.65) {
          $imposto = ($salario * 7.5) / 100;
        }else if ($salario >= 2826.66 && $salario <= 3751.05) {
          $imposto = ($salario * 15) / 100;
        }else if ($salario >= 3751.06 && $salario <= 4664.68) {
          $imposto = ($salario * 22.5) / 100;
        }else {
          $imposto = ($salario * 27.5) / 100;
        }
        return $imposto;
    }

    $resultado = calcularImpostoRenda(3800.00)

    ?>

    <h2>CALCULAR IMPOSTO DE RENDA</h2>

    <p>Imposto: <?= $resultado?></p>

</body>
</html>