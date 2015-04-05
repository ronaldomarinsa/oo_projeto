<?php
namespace Clientes;

use Clientes\Cliente;

class ClientePersister
{
    /**
     * PDO
     * 
     * @var \PDO
     */
    private $pdo;
    
    /**
     * Array de objetos Cliente
     * 
     * @var Cliente[]
     */
    private $clientes = array();
    
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function persist(Cliente $cliente)
    {
        if (!in_array($cliente, $this->clientes)) {
            $this->clientes[] = $cliente;
        }
    }
    
    public function remove(Cliente $cliente)
    {
        $key = array_search($cliente, $this->clientes);
        if ($key) {
            unset($this->clientes[$key]);
        }
    }
    
    public function flush()
    {
        foreach ($this->clientes as $cliente) {
            try {
                if (method_exists($cliente, "getCpf")) {
                    $stmt = $this->pdo->prepare("INSERT INTO PessoaFisica(nome,cpf,endereco,endCob,telefone,rating) VALUES(:nome,:cpf,:endereco,:endCob,:telefone,:rating)");
                    $cpf = $cliente->getCpf();
                    $stmt->bindParam(":cpf", $cpf);
                } else {
                    $stmt = $this->pdo->prepare("INSERT INTO PessoaJuridica(nome,razaoSocial,cnpj,endereco,endCob,telefone,rating) VALUES(:nome,:razaoSocial,:cnpj,:endereco,:endCob,:telefone,:rating)");
                    $cnpj = $cliente->getCnpj();
                    $razaoSocial = $cliente->getRazaoSocial();
                    $stmt->bindParam(":razaoSocial", $razaoSocial);
                    $stmt->bindParam(":cnpj", $cnpj);
                }
                $nome = $cliente->getNome();
                $endereco = $cliente->getEndereco();
                $endCob = $cliente->hasBillingAddress() ? $cliente->getBillingAddress() : null;
                $telefone = $cliente->getTelefone();
                $rating = $cliente->getRating();
                
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":endereco", $endereco);
                $stmt->bindParam(":endCob", $endCob);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->bindParam(":rating", $rating);
                
                if (!$stmt->execute()) {
                    print_r($stmt->errorInfo());
                }
            } catch (\PDOException $ex) {
                echo "Erro ao inserir dados: " . $ex->getMessage();
            }
        }
    }
}
