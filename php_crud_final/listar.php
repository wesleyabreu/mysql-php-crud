<h1>Lista de Produtos</h1>
<?php

    $sql = "SELECT * FROM Peca";     // Código da QUERY
    
    $res =  $con->QUERY($sql);          // Chamada da Query, Através da Conexão "$con"

    $nLinhas = $res->num_rows;           // Função para encontrar o número de linhas na tabela

    if($nLinhas == 0){
        echo "<p class='alert alert-danger'> Não há Peças Cadastradas </p>";
    }
    else{
        echo "<table class='table table-hover table-striped table-bordered'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nome</th>";
                echo "<th>Descrição</th>";
                echo "<th>Ações</th>";
            echo "<tr>";
            
            while($linha = $res->fetch_object()){   // Esse "fetch" pega linha por linha do que está no "$res" e vai coloando na outra variável "$linha"
                echo "<tr>";
                    echo "<td> $linha->idPeca </td>";
                    echo "<td> $linha->NomePeca </td>";
                    echo "<td> $linha->Descricao </td>";
                    echo "<td> <button class='btn btn-success' onclick=\"location.href='?page=editar&idPeca=".$linha->idPeca."';\">Editar</button> 
                               <button class='btn btn-danger' onclick=\"location.href='?page=salvar&acao=excluir&idPeca=".$linha->idPeca."';\">Excluir</button> </td>";
                echo "<tr>";
            }
        echo "</table>";
    }

?>