<?php

require_once('modelo/Gato.php');
require_once('modelo/Cachorro.php');

echo ("\n======ANIMAIS=======");
echo ("\n1. Cachorro\n2. Gato\n\n");

$choice = readline("Escolha: ");

if ($choice == 1){
    $cachorro = new Cachorro;
    $cachorro -> setNome(readline("Nome: "))
              -> setRaca(readline("Raça: "));
    $dados = $cachorro->getDados();
    echo $dados;
    $cachorro->latir();
    echo ("\n\n");

}

if ($choice == 2){
    $gato = new Gato;
    $gato -> setNome(readline("Nome: "))
              -> setRaca(readline("Raça: "));
    $dados = $gato->getDados();
    echo $dados;
    $gato->miar();
    echo("\n\n");
}
