<?php
require_once("modelo/Cliente.php");
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("util/Conexao.php");

class ClienteDAO {
    public function inserirCliente(Cliente $cliente) {
        $sql = "INSERT INTO clientes(tipo, nome_social, email, nome, cpf, razao_social, cnpj) VALUES(?,?,?,?,?,?,?)";

        $con = Conexao::getCon();
        $stmt = $con->prepare($sql);
        if($cliente instanceof ClientePF){
            $stmt->execute(array($cliente->getrTipo(), $cliente->getNomeSocial(), $cliente->getEmail(),$cliente->getNome(), $cliente->getCPF(), null, null));
        } else if($cliente instanceof ClientePJ){
            $stmt->execute(array($cliente->getrTipo(), $cliente->getNomeSocial(), $cliente->getEmail(), null, null, $cliente->getRazaoSocial(), $cliente->getCNPJ()));
        }         
    }

    public function listarClientes() {
        $sql = "SELECT * FROM   clientes";
        $con = Conexao::getCon();

        $stmt = $con->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll();
        
        return $this->MAPClientes($registros);
    }

    private function MAPClientes(array $registros) {
        $clientes = [];
        foreach ($registros as $reg) {
            if ($reg['tipo'] == 'F') {
                $cliente = new ClientePF();
                $cliente->setNome($reg['nome']);
                $cliente->setCPF($reg['cpf']);
            } else {
                $cliente = new ClientePJ();
                $cliente->setRazaoSocial($reg['razao_social']);
                $cliente->setCNPJ($reg['cnpj']);
            }
            $cliente->setId($reg['id']);
            $cliente->setNomeSocial($reg['nome_social']);
            $cliente->setEmail($reg['email']);
            $clientes[] = $cliente;
        }
        return $clientes;
    }

    public function buscarClientes($id) {
        $sql = "SELECT * FROM   clientes WHERE id = ?";
        $con = Conexao::getCon();

        $stmt = $con->prepare($sql);
        $stmt->execute(array($id));
        $registros = $stmt->fetchAll();
        
        return $this->MAPClientes($registros);

        if(count($clientes) > 0)
            return $clientes[0];
        else
            return null;
    }

    public function excluirCliente($id){
        $sql = "DELETE FROM clientes WHERE id = ?";
        $con = Conexao::getCon();
    
        $stmt = $con->prepare($sql);
        $stmt->execute(array($id));
    }
}
?>

