<?php
namespace Clientes;

use Clientes\BillingAddress;
use Clientes\Classifiable;
use Clientes\Cliente;

/**
 * Class PF
 * 
 * Pessoa Física
 */
class PF extends Cliente implements BillingAddress, Classifiable
{
    /**
     * CPF
     * 
     * @var string
     */
    protected $cpf;

    /**
     * Retorna o CPF
     * 
     * @return string CPF
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Seta o CPF
     * 
     * @param string $cpf
     * @return \PF Pessoa Física
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        
        return $this;
    }
}