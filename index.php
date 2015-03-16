<?php
require_once "Cliente.php";
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
                        <?php if (isset($_GET['decrescente'])) echo "disabled" ?>>Ordem Descrescente</a>
                </td>
            </tr>
            <tr>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
                <th>RG</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Data Nasc.</th>
                <th>Ações</th>
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
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo '<td><a class="btn btn-primary" href="?id=-1'.$ordem.'">'."Esconder</a>";

            } else {
                echo "<td>". $cliente->getNome(). "</td>";
                echo "<td>". $cliente->getCpf().  "</td>";
                echo "<td>". $cliente->getRg(). "</td>";
                echo "<td>". $cliente->getEndereco(). "</td>";
                echo "<td>". $cliente->getCidade(). "</td>";
                echo "<td>". $cliente->getDatanasc(). "</td>";

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
