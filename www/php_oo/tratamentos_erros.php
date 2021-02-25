<?php

    try {
      echo '<h3> *** Try*** </h3>';

      //$sql = 'Select * from clientes';
      //mysqli_query($sql);

      if(!file_exists('require_arquivo_a.php')) {
          throw new Exception('O Arquivo deveria está aqui as x  hrs mais n está, vamos assim ok');
      }

    } catch (Error $e) {
      echo '<h3> *** catch error *** </h3>';
      echo '<p style="color: red">' . $e . '</p>';

    }catch (Exception $e) {
      echo '<h3> *** catch Exception *** </h3>';
      echo '<p style="color: red">' . $e . '</p>';

    }finally {
      echo '<h3> *** Finally*** </h3>';
    }
?>

<!-- ESTILO DA PÁGINA -->
<link rel="stylesheet" href="../styles.css">