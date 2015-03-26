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

class ClientePessoaJuridica extends ClienteAbstract implements ClienteInterface{
    private $cnpj;
    private $insc_est;
    private $data_abertura;

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getInscEst()
    {
        return $this->insc_est;
    }


    /**
     * @param mixed $insc_est
     */
    public function setInscEst($insc_est)
    {
        $this->insc_est = $insc_est;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getDataAbertura()
    {
        return $this->data_abertura;
    }

    /**
     * @param mixed $data_abertura
     */
    public function setDataAbertura($data_abertura)
    {
        $this->data_abertura = $data_abertura;
        return $this;
    }


    public function exibeDadosCliente(){
        parent::exibeDadosCliente();
        echo "CNPJ:       ". $this->getCnpj() ."<br>";
        echo "Insc.Estad: ". $this->getInscEst() ."<br>";
        echo "Data Abert.:". $this->getDataAbertura() ."<br>";
    }

}