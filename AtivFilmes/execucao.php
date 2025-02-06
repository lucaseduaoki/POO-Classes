<?php
require_once("modelo/Filme.php");
require_once("modelo/Serie.php");
require_once("dao/ProdutoDAO.php");
require_once("util/Conexao.php");

$con = Conexao::getCon();

while(true){
    print("╔═══════Cadastro Produtos══════╗\n");
    print("║      O que deseja fazer?     ║\n");
    print("║    1: Cadastrar Filme        ║\n");
    print("║    2: Cadastrar Série        ║\n");
    print("║    3: Listar Produção        ║\n");
    print("║    4: Buscar Produção        ║\n");
    print("║    5: Excluir Produção       ║\n");
    print("║    0: Encerrar o programa    ║\n");
    print("╚══════════════════════════════╝\n");

    $num = readline("");

    switch($num){
        case 1:
            $produto = new Filme();
            echo "----------------------CADASTRO DE FILME--------------------------\n";
            $produto->setTipo('F'); // Definindo tipo como Filme
            $produto->setNome(readline("Digite o nome do filme: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setDataLanc(readline("Digite a data de lançamento do filme: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setClassIndicativa(readline("Digite a classificação indicativa do filme: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setDiretor(readline("Digite o nome do diretor: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setGenero(readline("Digite o gênero do filme: "));
            echo "-----------------------------------------------------------------\n";
            $adptLivro = readline("O filme é uma adaptação de livro? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($adptLivro == 1) {
                $produto->setAdptLivro(true);
            } else {
                $produto->setAdptLivro(false);
            }
            $produto->setTempoDuracao(readline("Qual o tempo de duração do filme? (em minutos): "));
            echo "-----------------------------------------------------------------\n";
            $continuidade = readline("O filme tem continuidade? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($continuidade == 1) {
                $produto->setContinuidade(true);
            } else {
                $produto->setContinuidade(false);
            }
            $cinema = readline("Estreiou nos cinemas? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($cinema == 1) {
                $produto->setCinema(true);
            } else {
                $produto->setCinema(false);
            }
            $meioFisico = readline("A locadora possui o meio físico desse filme? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($meioFisico == 1) {
                $produto->setUniFisica(true);
            } else {
                $produto->setUniFisica(false);
            }
            $dispoWeb = readline("O filme está disponível na web? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($dispoWeb == 1) {
                $produto->setDispoWeb(true);
            } else {
                $produto->setDispoWeb(false);
            }
            $produtoDao = new ProdutoDAO();
            $produtoDao->inserirProduto($produto);
            print("Filme cadastrado com sucesso!\n");
            break;

        case 2:
            $produto = new Serie();
            $produto->setTipo('S'); // Definindo tipo como Série
            $produto->setNome(readline("Digite o nome da série: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setDataLanc(readline("Digite a data de lançamento da série: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setClassIndicativa(readline("Digite a classificação indicativa da série: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setDiretor(readline("Digite o nome do diretor: "));
            echo "-----------------------------------------------------------------\n";
            $produto->setGenero(readline("Digite o gênero da série: "));
            echo "-----------------------------------------------------------------\n";
            $adptLivro = readline("A série é uma adaptação de livro? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($adptLivro == 1) {
                $produto->setAdptLivro(true);
            } else {
                $produto->setAdptLivro(false);
            }
            $produto->setNumTemporadas(readline("Quantas temporadas a série tem? "));
            $produto->setTempAproxEp(readline("Qual o tempo aproximado de cada episódio? (em minutos): "));
            $produto->setNumAproxEp(readline("Quantos episódios aproximados por temporada? "));
            echo "-----------------------------------------------------------------\n";
            $dispoWeb = readline("A série está disponível na web? (1 - Sim | 2 - Não ): ");
            echo "-----------------------------------------------------------------\n";
            if ($dispoWeb == 1) {
                $produto->setDispoWeb(true);
            } else {
                $produto->setDispoWeb(false);
            }
            $produtoDao = new ProdutoDAO();
            $produtoDao->inserirProduto($produto);
            print("Série cadastrada com sucesso!\n");
            break;

        case 3:
            $produtoDao = new ProdutoDAO();
            $produtos = $produtoDao->listarProdutos();
            foreach ($produtos as $dados) {
                echo $dados->getDadosProduto();
            }
            break;

        case 4:
            $id = readline("Informe o código de identificação do produto: ");
            $produtoDao = new ProdutoDAO();
            $produto = $produtoDao->buscarProduto($id);
            if ($produto) {
                echo $produto->getDadosProduto();
            } else {
                echo "Produto não encontrado.\n";
            }
            break;

        case 5:
            $id = readline("Informe o código de identificação do produto para exclusão: ");
            $produtoDao = new ProdutoDAO();
            $produtoDao->excluirProduto($id);
            echo "Produto excluído com sucesso.\n";
            break;

        case 0:
            print("Programa encerrado...\n");
            return true;

        default: 
            print("Opção inválida!\n");
    }
}
?>
