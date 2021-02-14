<?php

include "conexao.php";

$id = $_GET['id'];



$SQL = "SELECT * FROM camisetas WHERE id = $id";

$produto = $db->query($SQL) or die("Query Falhou");

    if($produto->num_rows >0){
        $dados = $produto->fetch_assoc();

        $nome_estampa = $dados['nome_estampa'];
        $cor = $dados['cor'];
        $categoria = $dados['categoria'];
        $valor = $dados['valor'];
        
    }
    else die("Produto não localizado.");
?>





<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
   
    <form method="POST" action="editar.php">
        <input type="hidden" name="id" value="<?php echo $id;?> ">
        <label >Nome da Estampa:</label><br><input type="text" name="nome_estampa" value="<?php echo $nome_estampa;?>"><br>
        <label >Cor:</label><br><input type="text" name="cor" value="<?php echo $cor;?>" ><br>
        <label >Valor:</label><br><input type="text" name="valor" value="<?php echo $valor;?>" ><br>
         
        <p>Categoria:</p>
        <select name="categoria" >
            <option value="Infantil"  <?php if($categoria == 'Infantil') echo "selected = 'selected';"?> >Infantil</option>
            <option value="Masculino" <?php if($categoria == 'Masculino') echo "selected = 'selected';"?>>Masculino</option>
            <option value="Feminino"  <?php if($categoria == 'Feminino') echo "selected = 'selected';"?>>Feminino</option>
        </select>
        
        <br><br>

        <input type="submit" value="Salvar">

    </form>

</body>
</html>