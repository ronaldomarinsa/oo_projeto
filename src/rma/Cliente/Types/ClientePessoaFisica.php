<?php
/**
 * Created by PhpStorm.
 * User: ronaldomarinsandrade
 * Date: 17/03/15
 * Time: 00:14
 */

namespace rma\Cliente\Types;

use rma\Cliente\ClienteAbstract as ClienteAbstract;
use rma\Cliente\Types\ClienteInterface as ClienteInterface;

class ClientePessoaFisica extends ClienteAbstract implements ClienteInterface{

    private $cpf;
    private $rg;
    private $datanasc;

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * @param mixed $datanasc
     */
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
        return $this;
    }

    public function exibeDadosCliente(){
        parent::exibeDadosCliente();
        echo "CPF:       ". $this->getCpf() ."<br>";
        echo "RG:        ". $this->getRg() ."<br>";
        echo "Data Nasc.:". $this->getDatanasc() ."<br>";
    }
}