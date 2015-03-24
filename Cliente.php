<?php
/**
 * Created by PhpStorm.
 * User: ronaldomarinsandrade
 * Date: 12/03/15
 * Time: 00:34
 */

class Cliente{

    private $nome;
    private $endereco;
    private $cidade;
    private $enderecoCobranca;
    private $importancia;
    private $telefone;


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * @param mixed $endereco_cobranca
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * @param mixed $importancia
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }



    public function exibeDadosCliente(){
        echo "NOME:     ". $this->getNome() ."<br>";
        echo "ENDEREÇO: ". $this->getEndereco() ."<br>";
        echo "CIDADE:   ". $this->getCidade() ."<br>";
        echo "FONE:     ". $this->getTelefone() . "<br>";
        if (strlen($this->getEnderecoCobranca()) > 10){
            echo "ENDEREÇO COBRANÇA: ".$this->getEnderecoCobranca()."<br>";
        }
        if (strlen($this->getImportancia()) > 0){
            echo "IMPORTÂNCIA: ".$this->getImportancia()."<br>";
        }
    }

}



