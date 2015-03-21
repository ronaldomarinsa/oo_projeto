<?php
require_once "config.php";

$clientes = preencheArray();
?>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Curso PHP Code-Education - Projeto 1 - Orientação a Objeto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
</head>

<body>

    <form name="clientes" class="form-horizontal" role="form" method="GET">

        <div class="form-group text-info">
            <label for="titulo" class="col-sm-8 control-label"><h1>Listagem Geral de Clientes</h1></label>
        </div>


        <!--grid-->
        <table class="table table-bordered table-hover table-striped" id="clientes-table">
            <thead>
            <tr>
                <td colspan="7" class="text-center">
                    <a href="?crescente=true" class="btn btn-primary" name="enviar"
                        <?php if (!isset($_GET['decrescente'])) echo "disabled" ?>>Ordem Crescente</a>
                    <a href="?decrescente=true" class="btn btn-warning"
                        <?php if (isset($_GET['decrescente'])) echo "disabled" ?>>Ordem Decrescente</a>
                </td>
            </tr>
            <tr>
                <td class="col-md-2">Nome</td>
                <td class="col-md-2">Tipo</td>
                <td class="col-md-2">Endereço</td>
                <td class="col-md-1">Cidade</td>
                <td class="col-md-1">Ações</td>
            </tr>
            </thead>

            <tbody>
            <?php
            //Define a ordem de exibição.
            if (!isset($_GET['decrescente'])){
                ksort($clientes);
                $ordem = "&crescente=true";

            } elseif (isset($_GET['decrescente'])){
                krsort($clientes);
                $ordem = "&decrescente=true";
            }

            $i = 0;
            foreach($clientes as $cliente):
                echo "<tr>";

            if (isset($_GET['id']) && $_GET['id']==$i){
                echo "<td>";
                $cliente->exibeDadosCliente();
                echo "</td>";
                if ($cliente instanceof \ClientePessoaFisica){
                    echo "<td>Pessoa Física</td>";
                }elseif ($cliente instanceof \ClientePessoaJuridica){
                    echo "<td>Pessoa Jurídica</td>";
                }
                echo '<td><a class="btn btn-primary" href="?id=-1'.$ordem.'">'."Esconder</a>";

            } else {
                echo "<td>". $cliente->getNome() . "</td>";
                if ($cliente instanceof \ClientePessoaFisica){
                    echo "<td>Pessoa Física</td>";
                } elseif ($cliente instanceof \ClientePessoaJuridica) {
                    echo "<td>Pessoa Jurídica</td>";
                }
                echo "<td>". $cliente->getEndereco(). "</td>";
                echo "<td>". $cliente->getCidade(). "</td>";
                echo '<td><a class="btn btn-primary" href="?id='.$i.$ordem.'">'."Detalhes</a>";
            }

            echo "</tr>";
            $i++;
            endforeach;
            ?>
            </tbody>
        </table>
    </form>

</body>
