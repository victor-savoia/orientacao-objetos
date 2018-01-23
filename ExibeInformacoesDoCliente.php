<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Exibe informacoes do Cliente</title>
  </head>
  <body>

    <?php
      require 'Cliente.php';

      // Create connection
      $conn = new mysqli('localhost', 'root', 'senha', 'testeAula');
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $cliente = new Cliente();
      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];

      $sql = "insert into CLIENTE (NOME, EMAIL)
      VALUES ('".$cliente->nome." ', '".$cliente->email."')";

      if ($conn->query($sql) === FALSE) {
          echo "Error: " . $sql . "<br>" . $conn->error.PHP_EOF;
      }

    ?>

    <h1>Cliente</h1>

    <h3>Nome: <?= $cliente->nome ?> </h3>
    <h3>Email: <?= $cliente->email ?></h3>

  </body>
</html>
