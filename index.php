<?php
require_once 'src/rma/Cliente/Util/config.php';

$clientes = preencheArray();
?>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>


<div class="container principal">
    <div class="col-md-offset-2 col-md-8">

        <table class="table">
            <thead>
            <tr>
                <td colspan="2" class="text-center">
                    <a href="?crescente=true" class="btn btn-primary" name="enviar"
                        <?php if (!isset($_GET['decrescente'])) echo "disabled" ?>>Ordem Crescente</a>
                    <a href="?decrescente=true" class="btn btn-warning"
                        <?php if (isset($_GET['decrescente'])) echo "disabled" ?>>Ordem Descrescente</a>
                </td>
            </tr>
            <tr>
                <td class="col-md-6">Nome</td>
                <td class="col-md-6">Tipo Pessoa</td>
                <td  class="col-md-2">Ação</td>
            </tr>
            </thead>
            <tbody>

            <?php
            if (!isset($_GET['decrescente'])){
                ksort($clientes);
                $ordem = "&crescente=true";
            } elseif (isset($_GET['decrescente'])){
                krsort($clientes);
                $ordem = "&decrescente=true";
            }
            $i = 0;
            foreach ($clientes as $cliente){
                echo "<tr>";

                if (isset($_GET['id']) && $_GET['id']==$i){
                    echo "<td>";
                    $cliente->exibeDadosCliente();
                    echo "</td>";
                    if ($cliente instanceof rma\Cliente\Types\ClientePessoaFisica){
                        echo "<td>Pessoa Física</td>";
                    } elseif ($cliente instanceof rma\Cliente\Types\ClientePessoaJuridica){
                        echo "<td>Pessoa Jurídica</td>";
                    }
                    echo '<td><a class="btn btn-primary" href="?id=-1'.$ordem.'">'."Esconder</a>";
                } else {
                    echo "<td>".$cliente->getNome()."</td>";
                    if ($cliente instanceof rma\Cliente\Types\ClientePessoaFisica){
                        echo "<td>Pessoa Física</td>";
                    } elseif ($cliente instanceof rma\Cliente\Types\ClientePessoaJuridica) {
                        echo "<td>Pessoa Jurídica</td>";
                    }
                    echo '<td><a class="btn btn-primary" href="?id='.$i.$ordem.'">'."Detalhes</a>";
                }

                echo "</tr>";
                $i++;
            }
            ?>
        </table>
    </div>
</div>
