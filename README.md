Projeto Fase 4

Nessa última fase do projeto, você, ao invés de trabalhar com arrays, você deverá persistir essas informações no banco de dados.

Em suas fixtures, você deverá criar uma classe com métodos específicos para persistirem dados no banco. Você terá que injetar no construtor dessa classe um objeto PDO (somente PDO).

Crie um método chamado persist dentro dessa mesma classe; esse método deverá receber como dependência um objeto do tipo Cliente.

E para finalizar, crie um método chamado flush. Quando o método for executado, os dados devem ser persistidos no banco de dados.

Perceba que a responsabilidade de gravar os dados no banco são especificamente dessa classe, sem adicionar nenhuma outra responsabilidade a ela.

Boa sorte!

PS: Depois disso implementado, a listagem dos clientes devem ser chamadas a partir do banco de dados e não mais de um conjunto de arrays.

---------------------------------

Para executar o projeto:

1 - Execute o arquivo: "fixtures.php"*, que se encontra na raiz deste projeto, onde irá criar o banco de dados, suas devidas tabelas e incluir os dados iniciais.
> php fixtures.php

2 - Execute o servidor embutido do PHP e aponte para a pasta "public"
> php -S [endereco]:[porta] -t public/