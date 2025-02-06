<?php
require_once("modelo/Produto.php");
require_once("modelo/Filme.php");
require_once("modelo/Serie.php");
require_once("util/Conexao.php");


class ProdutoDAO {
    public function inserirProduto(Produto $produto) {
        $sql = "INSERT INTO produtos (tipo, nome, data_lanc, class_indicativa, diretor, genero, adaptado_de_livro, 
                                     disponivel_web, num_temporadas, temp_aprox_ep, num_aprox_ep, tempo_duracao, 
                                     continuidade, cinema, unidade_fisica) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $con = Conexao::getCon();
        $stmt = $con->prepare($sql);
        if($produto instanceof Filme){
            $stmt->execute(array($produto->getTipo(),
                                 $produto->getNome(),
                                 $produto->getDataLanc(),
                                 $produto->getClassIndicativa(),
                                 $produto->getDiretor(),
                                 $produto->getGenero(),
                                 $produto->getAdptLivro(),
                                 $produto->getDispoWeb(),
                                 null,
                                 null,
                                 null,
                                 $produto->getTempoDuracao(),
                                 $produto->getContinuidade(),
                                 $produto->getCinema(),
                                 $produto->getUniFisica()
                            ));
                        }

        else if($produto instanceof Serie){
            $stmt->execute(array($produto->getTipo(),
                                 $produto->getNome(),
                                 $produto->getDataLanc(),
                                 $produto->getClassIndicativa(),
                                 $produto->getDiretor(),
                                 $produto->getGenero(),
                                 $produto->getAdptLivro(),
                                 $produto->getDispoWeb(),
                                 $produto->getNumTemporadas(),
                                 $produto->getTempAproxEp(),
                                 $produto->getNumAproxEp(),
                                 null,
                                 null,
                                 null,
                                 null 
                            ));
                        }
    }

    public function listarProdutos() {
        $sql = "SELECT * FROM   produtos";
        $con = Conexao::getCon();

        $stmt = $con->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll();
        
        return $this->MAPProduto($registros);
    }

    private function MAPProduto(array $registros) {
        $Produtos = [];
        foreach ($registros as $reg) {
            if ($reg['tipo'] == 'F') {
                $produto = new Filme();
                $produto->setTempoDuracao($reg['tempo_duracao']);
                $produto->setContinuidade($reg['continuidade']);
                $produto->setCinema($reg['cinema']);
                $produto->setUniFisica($reg['unidade_fisica']);
            } else {
                $produto = new Serie();
                $produto->setNumTemporadas($reg['num_temporadas']);
                $produto->setTempAproxEp($reg['temp_aprox_ep']);
                $produto->setNumAproxEp($reg['num_aprox_ep']);
            }
            $produto->setId($reg['id']);
            $produto->setTipo($reg['tipo']);
            $produto->setNome($reg['nome']);
            $produto->setDataLanc($reg['data_lanc']);
            $produto->setClassIndicativa($reg['class_indicativa']);
            $produto->setDiretor($reg['diretor']);
            $produto->setGenero($reg['genero']);
            $produto->setAdptLivro($reg['adaptado_de_livro']);
            $produto->setDispoWeb($reg['disponivel_web']);

            $Produtos[] = $produto;
        }
        return $Produtos;
    }

    public function buscarProduto($id) {
        $sql = "SELECT * FROM  produtos WHERE id = ?";
        $con = Conexao::getCon();

        $stmt = $con->prepare($sql);
        $stmt->execute(array($id));
        $registros = $stmt->fetchAll();
        
        $produtos = $this->MAPProduto($registros);

        if(count($produtos) > 0)
            return $produtos[0];
        else
            return null;
    }

    public function excluirProduto($id){
        $sql = "DELETE FROM produtos WHERE id = ?";
        $con = Conexao::getCon();
    
        $stmt = $con->prepare($sql);
        $stmt->execute(array($id));
    }
}
?>
