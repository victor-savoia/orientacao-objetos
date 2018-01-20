<?php

  class Turma{
    public $periodo;
    public $serie;
    public $sigla;
    public $tipoEnsino;

  }

  $c1 = new Turma();

  $c1->periodo = "periodo Tarde";
  $c1->serie = 'serie 8';
  $c1->sigla = 'sigla A';
  $c1->tipoDeEnsino = 'tipoDeEnsino Fundamental';


  echo $c1->periodo . "\n";
  echo $c1->serie . "\n";
  echo $c1->sigla . "\n";
  echo $c1->tipoDeEnsino . "\n";

  echo "\n";

  $c2 = new Turma();

  $c2->periodo = "periodo Manha";
  $c2->serie = "serie 5";
  $c2->sigla = "sigla B";
  $c2->tipoDeEnsino = "tipoDeEnsino Fundamental";

  echo $c2->periodo . "\n";
  echo $c2->serie . "\n";
  echo $c2->dataNascimento . "\n";
  echo $c2->tipoDeEnsino . "\n";

 ?>
