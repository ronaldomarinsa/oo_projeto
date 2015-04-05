<?php
namespace Clientes;

/**
 * Abstract Class Cliente
 * 
 * Classe abstrata Cliente
 * Não pode ser instanciada
 */
abstract class Cliente
{
    /**
     * ID
     * 
     * @var int
     */
    protected $id;
    
    /**
     * Nome ou Nome fantasia
     * 
     * @var string
     */
    protected $nome;
    
    /**
     * Endereço
     * 
     * @var string
     */
    protected $endereco;
    
    /**
     * Telefone
     * 
     * @var string
     */
    protected $telefone;
    
    /**
     * Classificação
     * 
     * @var int
     */
    protected $rating = 0;
    
    /**
     * Endereço de Cobrança
     * 
     * @var string 
     */
    protected $billingAddress;

    /**
     * Retorna o ID
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retorna o nome da pessoa ou nome fantasia da entidade
     * 
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Retorna o endereço
     * 
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Retorna o telefone
     * 
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    /**
     * Retorna a classificação
     * 
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }
    
    /**
     * Retorna o endereço de cobrança
     * 
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Seta o ID
     * 
     * @param int $id
     * @return \Cliente Cliente
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Seta o nome da pessoa ou nome fantasia da entidade
     * 
     * @param string $nome
     * @return \Cliente Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        
        return $this;
    }

    /**
     * Seta o endereço
     * 
     * @param string $endereco
     * @return \Cliente Cliente
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        
        return $this;
    }

    /**
     * Seta o telefone
     * 
     * @param string $telefone
     * @return \Cliente Cliente
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        
        return $this;
    }
    
    /**
     * Seta a classificação
     * 
     * @param int $rating
     * @return \Cliente Cliente
     */
    public function setRating($rating)
    {
        if (!is_integer($rating)) {
            $rating = 0;
        }        
        $this->rating = $rating > 5 ? 5 : $rating < 0 ? 0 : $rating;
        
        return $this;
    }
    
    /**
     * Seta o endereço de cobrança
     * 
     * @param string $billingAddress
     * @return \Cliente Cliente
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
        
        return $this;
    }
    
    /**
     * Verifica se tem endereço de cobrança
     * 
     * @return bool
     */
    public function hasBillingAddress() {
        return $this->billingAddress !== null;
    }            
}