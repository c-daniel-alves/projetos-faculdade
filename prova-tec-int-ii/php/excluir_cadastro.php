<?php

include "conexao.php";

$id = $_GET['id'];



$SQL = "SELECT * FROM camisetas WHERE id = $id";

$produto = $db->query($SQL) or die("Query Falhou");

    if($produto->num_rows >0){
        $dados = $produto->fetch_assoc();

        $nome_estampa = $dados['nome_estampa'];
        
    }
    else die("Produto não localizado.");
?>





<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Cadastro</title>
</head>
<body>
   
    <form method="POST" action="excluir.php">
        <input type="hidden" name="id" value="<?php echo $id;?> ">
        <label> Você deseja mesmo excluir o produto: <br> <?php echo $nome_estampa ?>  ?</label>
        <br><br>
        <input type="submit" value="Sim">
        <input type="button" value="Não" onclick="history.go(-1);">
    </form>

</body>
</html>