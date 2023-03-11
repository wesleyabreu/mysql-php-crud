<?php

    switch ($_REQUEST["acao"]) {

        case 'cadastrar':
            $NomePeca = $_POST["NomePeca"];
            $Descricao = $_POST["Descricao"];

            $sql = "INSERT INTO Peca(NomePeca, Descricao) VALUES ('{$NomePeca}', '{$Descricao}')";    // Código da QUERY de INSERÇÂO

            $res = $con->query($sql);   // Chamada dessa QUERY, armazena o resultado nessa variável "$res" ( tem que chamar pela coneção com SQL "$con")

            if($res){
                echo "<script>alert('Cadastro Feito com Sucesso');</script>";     // Alert
                echo "<script>location.href='?page=listar';</script>";            // Redireciona
            }
            else{
                echo "<script>alert('Cadastro Feito com Falha');</script>";
                echo "<script>location.href='?page=novo';</script>";
            }
        break;

        case 'editar':
            $NomePeca = $_POST["NomePeca"];
            $Descricao = $_POST["Descricao"];

            $sql = "UPDATE Peca SET NomePeca='{$NomePeca}', Descricao='{$Descricao}' WHERE idPeca=".$_REQUEST["idPeca"];   // Código da QUERY usando o q veio "hidden"

            $res = $con->query($sql);   // Chamada dessa QUERY, armazena o resultado nessa variável "$res" ( tem que chamar pela coneção com SQL "$con")

            if($res){
                echo "<script>alert('Cadastro Alterado com Sucesso');</script>";     // Alert
                echo "<script>location.href='?page=listar';</script>";               // Redireciona
            }
            else{
                echo "<script>alert('Cadastro Alterado com Falha');</script>";
                echo "<script>location.href='?page=novo';</script>";
            }
        break;

        case 'excluir':

            $sql = "DELETE FROM Peca WHERE idPeca=".$_REQUEST["idPeca"];

            $res = $con->query($sql);   // Chamada dessa QUERY, armazena o resultado nessa variável "$res" ( tem que chamar pela coneção com SQL "$con")

            if($res){
                echo "<script>alert('Cadastro Excluído com Sucesso');</script>";     // Alert
                echo "<script>location.href='?page=listar';</script>";               // Redireciona
            }
            else{
                echo "<script>alert('Cadastro Excluído com Falha');</script>";
                echo "<script>location.href='?page=novo';</script>";
            }

        break;
    }

?>