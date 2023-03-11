<h1> Editar Usuário </h1>

<?php

    $sql = "SELECT * FROM Peca WHERE idPeca=".$_REQUEST["idPeca"];   // Seleciona de acordo com o ID do usuário que veio pela URL

    $res =  $con->QUERY($sql);

    $linha = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">                  <!-- "action" == O que o form faz após clicar em SUBMIT -->
    <input type="hidden" name="acao" value="editar">        <!-- Apenas para enviar essa "acao" escondido ( sem escrever na URL ), vai lá pro case -->
    <input type="hidden" name="idPeca" value="<?php echo $linha->idPeca; ?>"    

    <div>
        <label>Nome</label>
        <input type="text" name="NomePeca" class="form-control" value="<?php echo "$linha->NomePeca"; ?>">  <!-- "Value" Já escreve na caixa os dados -->
    </div>

    <div>
        <label>Descricao</label>
        <input type="text" name="Descricao" class="form-control" value="<?php echo "$linha->Descricao"; ?>">    <!-- "Value" Já escreve na caixa os dados -->
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>