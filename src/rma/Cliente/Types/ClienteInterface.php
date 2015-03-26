<?php
/**
 * Created by PhpStorm.
 * User: ronaldomarinsandrade
 * Date: 17/03/15
 * Time: 00:19
 */
namespace rma\Cliente\Types;

interface ClienteInterface {

    public function setNome($nome);

    public function setEndereco($endereco);

    public function setCidade($cidade);

    public function setEnderecoCobranca($enderecoCobranca);

    public function setImportancia($importancia);

    public function setTelefone($telefone);

}