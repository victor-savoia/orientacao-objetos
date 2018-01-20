<?php

  class CartaoDeCredito{
    public $numero;
    public $dataDeValidade;
  }

  $c1 = new CartaoDeCredito();

  $c1->numero = 111111;

  $c1->dataDeValidade = "01/01/2013";

  echo $c1->numero . "\n";
  echo $c1->dataDeValidade . "\n";

  echo "\n";

  $c2 = new CartaoDeCredito();

  $c2->numero = 222222;

  $c2->dataDeValidade = "01/01/2014";

  echo $c2->numero . "\n";
  echo $c2->dataDeValidade . "\n";

 ?>
