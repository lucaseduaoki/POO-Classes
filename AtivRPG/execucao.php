<?php

require_once('modelo/Mago.php');
require_once('modelo/Curandeiro.php');
require_once('modelo/Combatente.php');

$p1 = new Poder("Recupera energia", 0);
$p2 = new Poder("Recupera energia super" , 20);
$p3 = new Poder("Golpe normal", 0);
$p4 = new Poder("Golpe especial", 15);

$n1 = new Curandeiro();
$n1->setNome(readline("Nome do mago: "))
   ->setPoder($p1);
$n1->setForcaDeCura(readline("Força de cura: "));

$c1 = new Combatente();
$c1->setNome(readline("Nome do mago: "))
   ->setPoder($p3);
$c1->setForcaDeAtaque(readline("Força de ataque: "));
