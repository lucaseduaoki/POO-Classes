<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");

//Aluno
$aluno = new Aluno();
$aluno -> setNome("Lucas")
       -> setIdade(16)
       -> setRg("13203763982")
       -> setMatricula(12345);
echo $aluno;

echo "\n";

$professor = new Professor;
$professor -> setNome("Daniel")
           -> setIdade(26)
           -> setRg("435435435")
           -> setSalario(2000);
echo $professor;

echo "\n";
