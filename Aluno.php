<?php

  class Aluno{
    public $nome;
    public $rg;
    public $dataNascimento;
  }

  $c1 = new Aluno();

  $c1->nome = "Marcelo Martins";
  $c1->rg = '33333333-3';
  $c1->dataNascimento = '02/04/1985';


  echo $c1->nome . "\n";
  echo $c1->rg . "\n";
  echo $c1->dataNascimento . "\n";

  echo "\n";

  $c2 = new Aluno();

  $c2->nome = "Rafael Cosentino";
  $c2->rg = "222222222-2";
  $c2->dataNascimento = "30/10/1984";

  echo $c2->nome . "\n";
  echo $c2->rg . "\n";
  echo $c2->dataNascimento . "\n";

 ?>
