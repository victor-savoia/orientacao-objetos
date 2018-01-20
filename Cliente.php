<?php

  class Cliente{
    public $nome;
    public $codigo;
  }

  $c1 = new Cliente();

  $c1->nome = 'Rafael Cosentino';

  $c1->codigo = 1;

  echo $c1->nome . "\n";
  echo $c1->codigo . "\n";

  echo "\n";

  $c2 = new Cliente();

  $c2->nome = 'Jonas Hirata';

  $c2->codigo = 2;

  echo $c2->nome . "\n";
  echo $c2->codigo . "\n";

 ?>
