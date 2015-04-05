<?php
namespace Clientes;

use Clientes\BillingAddress;
use Clientes\Classifiable;
use Clientes\Cliente;

/**
 * Class PJ
 * 
 * Pessoa Juridica
 */
class PJ extends Cliente implements BillingAddress, Classifiable
{
    /**
     * Razão Social
     * 
     * @var string
     */
    protected $razaoSocial;
    /**
     * CNPJ
     * 
     * @var string
     */
    protected $cnpj;

    /**
     * Retorna a Razão Social
     * 
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Retorna o CNPJ
     * 
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Seta a Razão Social
     * 
     * @param string $razaoSocial
     * @return \PJ Pessoa Jurídica
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        
        return $this;
    }

    /**
     * Seta o CNPJ
     * 
     * @param string $cnpj
     * @return \PJ Pessoa Jurídica
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        
        return $this;
    }
}