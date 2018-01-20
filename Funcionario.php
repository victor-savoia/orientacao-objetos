<?php

  class Funcionario{
    public $nome;
    public $salario;
  }

  $c1 = new Funcionario();

  $c1->nome = "Marcelo Martins";
  $c1->salario = 1800.57;


  echo $c1->nome . "\n";
  echo $c1->salario . "\n";

  echo "\n";

  $c2 = new Funcionario();

  $c2->nome = "Rafael Cosentino";
  $c2->salario = 2000.88;

  echo $c2->nome . "\n";
  echo $c2->salario . "\n";

 ?>
