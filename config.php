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
        ->setTelefone("3455-9898")
        ->setDatanasc("05/06/1977");
    $objcli->setEnderecoCobranca($objcli->getEndereco());
    $objcli->setImportancia(3);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Vitor")
        ->setEndereco("Rua da Guia, 12")
        ->setCidade("Recife")
        ->setCnpj("55363634634643")
        ->setInscEst("314343333")
        ->setTelefone("9988-9898")
        ->setDataAbertura("14/03/2005");
    //$objcli->setEnderecoCobranca($objcli->getEndereco());
    $objcli->setImportancia(5);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Everton Pascoa")
        ->setEndereco("Rua da Lama, 1456")
        ->setCidade("Afogados")
        ->setCnpj("55363634645643")
        ->setInscEst("3143433456")
        ->setTelefone("9877-9898")
        ->setDataAbertura("21/01/2003");
    $objcli->setEnderecoCobranca("Rua da Lapa, 344343 - RJ");
    $objcli->setImportancia(6);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Durval")
        ->setEndereco("Av Boa Viagem, 2256")
        ->setCidade("Recife")
        ->setCpf("88949566753")
        ->setRg("4628344")
        ->setTelefone("3268-8338")
        ->setDatanasc("10/03/1981");
    //$objcli->setEnderecoCobranca($objcli->getEndereco());
    $objcli->setImportancia(7);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Rithely")
        ->setEndereco("Av Boa Viagem, 2236")
        ->setCidade("Recife")
        ->setCpf("88949382294")
        ->setRg("466778")
        ->setTelefone("8776-9821")
        ->setDatanasc("11/11/1971");
    $objcli->setEnderecoCobranca($objcli->getEndereco());
    $objcli->setImportancia(7);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Rene")
        ->setEndereco("Av Boa Viagem, 2236")
        ->setCidade("Recife")
        ->setCpf("88949382333")
        ->setRg("466112")
        ->setTelefone("3455-9891")
        ->setDatanasc("07/12/1984");
    //$objcli->setEnderecoCobranca("Rua Gervasio Pires, 4554 - Imbiribeira");
    $objcli->setImportancia(5);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Mancha")
        ->setEndereco("Rua da Guia, 12")
        ->setCidade("Recife")
        ->setCnpj("12599834634643")
        ->setInscEst("314343312")
        ->setTelefone("3455-1221")
        ->setDataAbertura("17/05/2001");
    $objcli->setEnderecoCobranca($objcli->getEndereco());
    $objcli->setImportancia(4);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Elber")
        ->setEndereco("Rua Coruripe, 44")
        ->setCidade("Carpina")
        ->setCnpj("12599677734983")
        ->setInscEst("314344498")
        ->setTelefone("3455-4443")
        ->setDataAbertura("27/08/2001");
    //$objcli->setEnderecoCobranca($objcli->getEndereco());
    $objcli->setImportancia(4);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaJuridica();
    $objcli
        ->setNome("Diego Souza")
        ->setEndereco("Av. Boa Viagem, 9844")
        ->setCidade("Recife")
        ->setCnpj("56678674734983")
        ->setInscEst("3567774498")
        ->setTelefone("2233-1267")
        ->setDataAbertura("02/10/1979");
    $objcli->setEnderecoCobranca($objcli->getEndereco());
    $objcli->setImportancia(1);

    $clientes[] = $objcli;


    $objcli = new ClientePessoaFisica();
    $objcli
        ->setNome("Felipe Azevedo")
        ->setEndereco("Av Arthur Lundreguem, 126")
        ->setCidade("Recife")
        ->setCpf("8894934000")
        ->setRg("400012")
        ->setTelefone("9801-0423")
        ->setDatanasc("07/01/1991");
    $objcli->setEnderecoCobranca("Rua da Concordias, 1144 - Centro");
    $objcli->setImportancia(5);

    $clientes[] = $objcli;


    return $clientes;
}

?>