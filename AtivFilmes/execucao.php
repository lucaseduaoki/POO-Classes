<?php
require_once("modelo/Filme.php");
require_once("modelo/Serie.php");
require_once("dao/ProdutoDAO.php");
require_once("util/Conexao.php");
$con = Conexao::getCon();

while(true){
    print("╔═══════Cadastro Clientes══════╗\n");
    print("║      O que deseja fazer?     ║\n");
    print("║    1: Cadastrar Filme        ║\n");
    print("║    2: Cadastrar Série        ║\n");
    print("║    3: Listar Produção        ║\n");
    print("║    4: Buscar Produção        ║\n");
    print("║    5: Excluir Produção       ║\n");
    print("║    0: Encerrar o pragrama    ║\n");
    print("╚══════════════════════════════╝\n");

    $num = readline("");
    switch($num){
        case 1:
            $cliente = new ClientePF();
            $cliente->setNome(readline("Qual o seu nome? "));
            $cliente->setCPF(readline("Qual o seu CPF? "));
            $cliente->setEmail(readline("Qual o seu e-mail? "));
            $cliente->setNomeSocial(readline("Qual o seu nome social? "));

            $clienteDao = new ClienteDao();
            $clienteDao->inserirCliente($cliente);
            print("Cliente PF cadastrado com sucesso!\n");
            break;
        case 2:
            $cliente = new ClientePJ();
            $cliente->setNomeSocial(readline("Qual o seu nome social? "));
            $cliente->setEmail(readline("Qual o seu e-mail? "));
            $cliente->setCNPJ(readline("Qual o seu CNPJ? "));
            $cliente->setRazaoSocial(readline("Qual a sua razão social? "));

            $clienteDao = new ClienteDao();
            $clienteDao->inserirCliente($cliente);
            print("Cliente PJ cadastrado com sucesso!\n");
            break;
        case 3:
            $clienteDao = new ClienteDao();
            $registros = $clienteDao->listarClientes();
            foreach($registros as $dados){
                echo $dados;
            }
            break;

        case 4:
            $clienteDao = new ClienteDao();
            $registros = $clienteDao->buscarClientes(readline("Informe o codigo de identificação(ID): \n"));
            foreach($registros as $dados){
                echo $dados;
            }
            break;

        case 5:
            $clienteDao = new ClienteDao;
            $registros = $clienteDao->listarClientes();
            foreach($registros as $dados){
                echo $dados;
            }

            $registros = $clienteDao->excluirCliente(readline("Informe o codigo de identificação(ID): \n"));
            echo ("Exclusão feita com sucesso");
            break;

        case 0:
            print("Programa encerrado...\n");
            return true;
            
        default: 
            print("Opção invalida!\n");
    }
}    
?>
