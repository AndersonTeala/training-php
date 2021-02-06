<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anderson Teala</title>
</head>
<body>
    <?php

        $parameto = abc ;

        switch ($parameto) {
            case 1;
                echo 'Entrou no case 1';
              break;
            
            case 2;
                echo 'Entrou no case 2';
              break;

            case 3;
                echo 'Entrou no case 3';
              break;

            case abc;
                echo 'Entrou no case 4';
              break;
            
            default:
                echo 'Entrou no default';
              break;
        }

    ?>
</body>
</html>