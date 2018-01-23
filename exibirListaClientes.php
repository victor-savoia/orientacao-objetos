<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exibe Lista de todos os clientes</title>
  </head>
  <body>
    <h1>Lista de clientes</h1>
    <table>

    <?php
      require 'BaseDados.php';
      require 'Cliente.php';


      $c = new BaseDeDados();

      $conn = $c->getConnection();

      $sql = "SELECT nome, email FROM CLIENTE";

      $result = mysqli_query($conn, $sql);

      while ($obj = mysqli_fetch_object($result)) { ?>
        <tr>
          <td><?php echo $obj->nome ?></td>
          <td><?php echo $obj->email ?></td>
        </tr>
      <?php }  ?>

    </table>

  </body>
</html>
