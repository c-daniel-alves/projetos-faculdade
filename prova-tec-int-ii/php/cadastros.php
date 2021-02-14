<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
   
    <form method="POST" action="cadastro_salvar.php">

        <label >Nome da Estampa:</label><br><input type="text" name="nome_estampa"><br>
        <label >Cor:</label><br><input type="text" name="cor"><br>
        <label >Valor:</label><br><input type="text" name="valor">
        
        <p>Categoria:</p>
        <select name="categoria" >
            <option value="Infantil"  >Infantil</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>

        <br><br>
        <input type="submit" value="Salvar">
        

    </form>

</body>
</html>