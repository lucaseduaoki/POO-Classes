<?php

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDAO.php");

require_once("util/Conexao.php");

//Teste da conexão
/*require_once("util/Conexao.php");
$con = Conexao::getCon();
print_r($con); */

do {
    echo "\n\n----CADASTRO DE CLIENTES----\n";
    echo "1- Cadastrar Cliente PF\n";
    echo "2- Cadastrar Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Cliente\n";
    echo "5- Excluir Cliente\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    switch ($opcao) {
        case 1:
            //Criar o objeto a ser persistido
            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o nome: "));
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setCpf(readline("Informe o CPF: "));
            $cliente->setEmail(readline("Informe o e-mail: "));

            //Chamar o método do DAO para persistir o objeto
            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);

            echo "Cliente PF cadastrado com sucesso\n\n";
            break;


        case 2:
            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline("Informe a razão social: "));
            $cliente->setCnpj(readline("Informe o CNPJ: "));
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setEmail(readline("Informe o e-mail: "));

            //Chamar o método do DAO para persistir o objeto
            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);

            echo "Cliente PJ cadastrado com sucesso\n\n";
        break;

        case 3:
            break;

        case 4:
            break;

        case 5:
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
