<?php
require_once __DIR__ . "/autoload.php";

use Database\DB;
use Clientes\ClientePersister;
use Clientes\PF;
use Clientes\PJ;

$db = new DB("mysql:host=127.0.0.1;charset=utf8", "poo", "root", "");
$pdo = $db->getConnection();

$tablePessoaFisica = $pdo->prepare(
    "CREATE TABLE IF NOT EXISTS `PessoaFisica` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `endereco` TEXT NOT NULL,
    `endCob` TEXT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `rating` INT(1) NOT NULL);"
);
if (!$tablePessoaFisica->execute()) {
    die(print_r($tablePessoaFisica->errorInfo()));    
}
$tablePessoaJuridica = $pdo->prepare(
    "CREATE TABLE IF NOT EXISTS `PessoaJuridica`(
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `razaoSocial` VARCHAR(255) NOT NULL,
    `cnpj` VARCHAR(14) NOT NULL,
    `endereco` TEXT NOT NULL,
    `endCob` TEXT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `rating` INT(1) NOT NULL);"
);
if (!$tablePessoaJuridica->execute()) {
    die(print_r($tablePessoaJuridica->errorInfo()));
}

$cp = new ClientePersister($pdo);

$c1 = new PF();
$c2 = new PJ();
$c3 = new PF();
$c4 = new PF();
$c5 = new PJ();
$c6 = new PF();
$c7 = new PF();
$c8 = new PF();
$c9 = new PF();
$c10 = new PF();

$c1->setId(1)->setNome("Ronaldo Marins Andrade")->setCpf("81933130385")->setEndereco("Rua Teodoro Cabral, 1635 - Fortaleza-CE - 60337-190")->setTelefone("(85) 8618-2213")->setRating(4);
$c2->setId(2)->setNome("Matheus Oliveira")->setRazaoSocial("Sofia Goncalves Ltda.")->setCnpj("79471546000180")->setEndereco("Quadra Quadra 293, 154 - Luziânia-GO - 72859-293")->setTelefone("(61) 8528-2216")->setRating(3)->setBillingAddress("Rua Marta, 1527 - Camaragibe-PE - 54783-035");
$c3->setId(3)->setNome("Denilson Marins Leite")->setCpf("75346676406")->setEndereco("Rua Diogo Ribeiro, 919 - São Paulo-SP - 02355-120")->setTelefone("(11) 6412-6787")->setRating(2);
$c4->setId(4)->setNome("Janete Marins")->setCpf("51381266797")->setEndereco("Rua Santa Helena, 47 - Campo Grande-MS - 79006-380")->setTelefone("(67) 5088-7877")->setRating(5)->setBillingAddress("Rua Marta, 1527 - Camaragibe-PE - 54783-035");
$c5->setId(5)->setNome("Pipa Cabeleireiros")->setRazaoSocial("Lavinia Silva Ltda.")->setCnpj("67216728000126")->setEndereco("Rua Marta, 1527 - Camaragibe-PE - 54783-035")->setTelefone("(81) 4382-2259")->setRating(1);
$c6->setId(6)->setNome("Rafael José Fernandes")->setCpf("52552252311")->setEndereco("Rua Abel Simões de Carvalho, 887 - São Paulo-SP - 03974-060")->setTelefone("(11) 3553-6457")->setRating(0);
$c7->setId(7)->setNome("Fernando Cristiano Gomes")->setCpf("96013038392")->setEndereco("Rua Isaías Perez, 747 - Sete Lagoas-MG - 35700-335")->setTelefone("(31) 8714-5707")->setRating(5);
$c8->setId(8)->setNome("Ryan Araujo Sousa")->setCpf("15438518351")->setEndereco("Rua Doutor Roberto de Almeida Vinhas, 952 - São Paulo-SP - 01547-070")->setTelefone("(11) 2898-2392")->setRating(2);
$c9->setId(9)->setNome("José Sousa Ferreira")->setCpf("91510297820")->setEndereco("Rua JMH 2, 634 - Goiânia-GO - 74769-772")->setTelefone("(62) 6750-9670")->setRating(3);
$c10->setId(10)->setNome("Carlos Barros da Silva")->setCpf("36907745437")->setEndereco("Rua Alma do Tempo, 1131 - Serra-ES - 29173-005")->setTelefone("(27) 8168-9278")->setRating(5);

$cp->persist($c1);
$cp->persist($c2);
$cp->persist($c3);
$cp->persist($c4);
$cp->persist($c5);
$cp->persist($c6);
$cp->persist($c7);
$cp->persist($c8);
$cp->persist($c9);
$cp->persist($c10);

$cp->flush();