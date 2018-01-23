<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Exibe informacoes do Cliente</title>
  </head>
  <body>

    <?php
      require 'Cliente.php';
      require 'BaseDados.php';

      $cliente = new Cliente();
      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];

      $c = new BaseDeDados();

      $conn = $c->getConnection();


      $sql = "insert into CLIENTE (NOME, EMAIL)
      VALUES (?, ?)";

      $prepared = $conn->prepare($sql);
      $prepared->bind_param("ss", $cliente->nome, $cliente->email);
      $saida = $prepared->execute();
      $prepared->close();

      $c->closeConnection();
    ?>

    <h1>Cliente</h1>

    <?php
      if($saida) {
     ?>
     <h3>Cliente inserido com sucesso.</h3>
   <?php } else { ?>
     <h3>Erro: <?php $conn->error ?></h3>
     <?php  } ?>


    <h3>Nome: <?= $cliente->nome ?> </h3>
    <h3>Email: <?= $cliente->email ?></h3>

  </body>
</html>
