<?php
define('CLASS_DIR','/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

function preencheArray(){

    $clientes = array();

    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Magrão")
        ->setEndereco("Rua da Hora, 456")
        ->setCidade("Recife")
        ->setCpf("88949452294")
        ->setRg("466456")
        ->setDatanasc("05/06/1977");
    $objcli->defineEnderecoCobranca($objcli->getEndereco());
    $objcli->defineImportancia(3);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Vitor")
        ->setEndereco("Rua da Guia, 12")
        ->setCidade("Recife")
        ->setCnpj("55363634634643")
        ->setInscEst("314343333")
        ->setDataAbertura("14/03/2005");
    $objcli->defineEnderecoCobranca($objcli->getEndereco());
    $objcli->defineImportancia(5);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Everton Pascoa")
        ->setEndereco("Rua da Lama, 1456")
        ->setCidade("Afogados")
        ->setCnpj("55363634645643")
        ->setInscEst("3143433456")
        ->setDataAbertura("21/01/2003");
    $objcli->defineEnderecoCobranca("Rua da Lapa, 344343 - RJ");
    $objcli->defineImportancia(6);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Durval")
        ->setEndereco("Av Boa Viagem, 2256")
        ->setCidade("Recife")
        ->setCpf("88949566753")
        ->setRg("4628344")
        ->setDatanasc("10/03/1981");
    $objcli->defineEnderecoCobranca($objcli->getEndereco());
    $objcli->defineImportancia(7);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Rithely")
        ->setEndereco("Av Boa Viagem, 2236")
        ->setCidade("Recife")
        ->setCpf("88949382294")
        ->setRg("466778")
        ->setDatanasc("11/11/1971");
    $objcli->defineEnderecoCobranca($objcli->getEndereco());
    $objcli->defineImportancia(7);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Rene")
        ->setEndereco("Av Boa Viagem, 2236")
        ->setCidade("Recife")
        ->setCpf("88949382333")
        ->setRg("466112")
        ->setDatanasc("07/12/1984");
    $objcli->defineEnderecoCobranca("Rua Gervasio Pires, 4554 - Imbiribeira");
    $objcli->defineImportancia(5);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Mancha")
        ->setEndereco("Rua da Guia, 12")
        ->setCidade("Recife")
        ->setCnpj("12599834634643")
        ->setInscEst("314343312")
        ->setDataAbertura("17/05/2001");
    $objcli->defineEnderecoCobranca($objcli->getEndereco());
    $objcli->defineImportancia(4);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Elber")
        ->setEndereco("Rua Coruripe, 44")
        ->setCidade("Carpina")
        ->setCnpj("12599677734983")
        ->setInscEst("314344498")
        ->setDataAbertura("27/08/2001");
    $objcli->defineEnderecoCobranca($objcli->getEndereco());
    $objcli->defineImportancia(4);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Diego Souza")
        ->setEndereco("Av. Boa Viagem, 9844")
        ->setCidade("Recife")
        ->setCnpj("56678674734983")
        ->setInscEst("3567774498")
        ->setDataAbertura("02/10/1979");
    $objcli->defineEnderecoCobranca($objcli->getEndereco());
    $objcli->defineImportancia(1);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Felipe Azevedo")
        ->setEndereco("Av Arthur Lundreguem, 126")
        ->setCidade("Recife")
        ->setCpf("8894934000")
        ->setRg("400012")
        ->setDatanasc("07/01/1991");
    $objcli->defineEnderecoCobranca("Rua da Concordias, 1144 - Centro");
    $objcli->defineImportancia(5);

    $clientes[] = $objcli;


    return $clientes;
}

?>