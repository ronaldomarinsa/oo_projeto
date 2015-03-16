<?php
/**
 * Created by PhpStorm.
 * User: ronaldomarinsandrade
 * Date: 12/03/15
 * Time: 00:34
 */

class Cliente {

    private $nome;
    private $cpf;
    private $rg;
    private $endereco;
    private $cidade;
    private $datanasc;

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
        return $this;
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
        echo "NOME:     ". $this->getNome() ."<br>";
        echo "CPF/CNPJ: ". $this->getCpf() ."<br>";
        echo "RG:       ". $this->getRg() ."<br>";
        echo "ENDEREÇO: ". $this->getEndereco() ."<br>";
        echo "CIDADE:   ". $this->getCidade() ."<br>";
        echo "DATA NASC:". $this->getDatanasc() ."<br>";
    }

}


$cliente01 = new Cliente();

$cliente01->setNome("Magrão")
    ->setCpf("88949452294")
    ->setRg("466456")
    ->setEndereco("Rua da Hora, 456")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;


$cliente02 = new Cliente();

$cliente02->setNome("Vitor")
    ->setCpf("88949382334")
    ->setRg("466328")
    ->setEndereco("Rua da Guia, 12")
    ->setCidade("Recife")
    ->setDatanasc("06/07/1978")
;


$cliente03 = new Cliente();

$cliente03->setNome("Everton Pascoa")
    ->setCpf("88949382988")
    ->setRg("4663455")
    ->setEndereco("Rua da Lama, 1456")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1979")
;


$cliente04 = new Cliente();

$cliente04->setNome("Durval")
    ->setCpf("88949382678")
    ->setRg("466789")
    ->setEndereco("Rua das Calçadas, 446")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;


$cliente05 = new Cliente();

$cliente05->setNome("Rithely")
    ->setCpf("88949382294")
    ->setRg("466778")
    ->setEndereco("Rua da Moeda, 23")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;


$cliente06 = new Cliente();

$cliente06->setNome("Rene")
    ->setCpf("88949382294")
    ->setRg("466778")
    ->setEndereco("Rua da Conde de Iraja, 4556")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;


$cliente07 = new Cliente();

$cliente07->setNome("Mancha")
    ->setCpf("88949382294")
    ->setRg("466778")
    ->setEndereco("Av Boa Viagem, 112")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;


$cliente08 = new Cliente();

$cliente08->setNome("Elder")
    ->setCpf("88949382294")
    ->setRg("466778")
    ->setEndereco("Rua Coruripe, 44")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;


$cliente09 = new Cliente();

$cliente09->setNome("Diego Souza")
    ->setCpf("88949382294")
    ->setRg("466778")
    ->setEndereco("Rua da Guia, 1222")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;


$cliente10 = new Cliente();

$cliente10->setNome("Felipe Azevedo")
    ->setCpf("88949382294")
    ->setRg("466778")
    ->setEndereco("Rua da Hora, 455")
    ->setCidade("Recife")
    ->setDatanasc("05/06/1977")
;

//Defino o array de objetos.
$clientes = [$cliente01, $cliente02, $cliente03, $cliente04, $cliente05, $cliente06, $cliente07,
    $cliente08, $cliente09, $cliente10 ];



