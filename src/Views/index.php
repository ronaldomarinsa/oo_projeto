<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Clientes</title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container">
          <h1><a href="#">Cadastro de Clientes</a></h1>
        <hr />
        <?php 
            $key = filter_input(INPUT_GET, "detalhe");
            if (is_numeric($key)):
        ?>
        <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php 
                        echo $clientes[$key]['nome'] ."   " ;

                        for ($i = 0; $i < $clientes[$key]["rating"]; $i++) {
                            echo "<i class='glyphicon glyphicon-bookmark'></i>";
                        }
                        ?>
                    </h3>
                </div>

                <div class="panel-body">
                    <?php
                    if (isset($clientes[$key]["cnpj"])) {
                        echo "CNPJ: {$clientes[$key]['cnpj']}<br />";
                        echo "Razão Social: {$clientes[$key]['razaoSocial']}<br />";
                    } else {
                        echo "CPF: {$clientes[$key]['cpf']}<br />";
                    }
                    echo "Endereço: {$clientes[$key]['endereco']}<br />";
                    if ($clientes[$key]['endCob']) {
                        echo "<strong>Endereço de Cobrança:</strong> {$clientes[$key]['endCob']}<br />";
                    }
                    echo "Telefone: {$clientes[$key]['telefone']}<br />";
                    ?>
                </div>
            </div>
        <?php
            endif;
        ?>
        <p>
            <a href="public/?ordem=ASC" class="btn btn-primary"><i class="glyphicon glyphicon-sort-by-order"></i></a>&nbsp;<a href="public/?ordem=DESC" class="btn btn-primary"><i class="glyphicon glyphicon-sort-by-order-alt"></i></a>
        </p>
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <td>&nbsp;</td>
                    <td>Nome</td>
                    <td>Tipo</td>
                    <td>Classificação</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $ordem = filter_input(INPUT_GET, "ordem") ?: "ASC";
                    foreach($clientes as $key => $cliente): 
                ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo "<a href='?ordem={$ordem}&detalhe={$key}'>".$cliente["nome"]."</a>"; ?></td>
                    <td><?php echo isset($cliente["cpf"]) ? "Pessoa Física" : "Pessoa Jurídica"; ?></td>
                    <td>
                        <?php
                        for ($i = 0; $i < $cliente["rating"]; $i++) {
                            echo "<i class='glyphicon glyphicon-bookmark'></i>";
                        }
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>        
        <hr />
        <p class="text-faded">
            <small>
                School of Net - Curso Trilhando PHP - módulo POO - aluno: Ronaldo Marins
            </small>
        </p>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>