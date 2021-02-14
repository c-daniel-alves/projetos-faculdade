<?php

    include "conexao.php";

    $SQL = "SELECT * FROM camisetas ORDER BY id";

    $camisetas = $db->query($SQL) or die("Erro na busca dos produtos");

    $total_registros = $camisetas->num_rows;

?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>

    <a>Filtrar: </a>
    <a href="categoria_masculino.php">Masculino</a> 
    <a href="categoria_feminino.php">Feminino</a>
    <a href="categoria_infantil.php">Infantil</a>

    <?php

    if ($total_registros == 0) 
    {

        echo "<p>Nenhum produto cadastrado</p>";

    }
    else
    {

    ?>

        <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Produto</th>
                <th>Cor</th>
                <th>Genero</th>
                <th>valor</th>
            </tr>
        </thead>
        <tbody>

        <?php
            while ($dados = $camisetas->fetch_assoc())
            {
        ?>

            <tr>
                <td><?php echo $dados['id']; ?></td>
                <td width="300"><?php echo $dados['nome_estampa']; ?></td>
                <td width="80"><?php echo $dados['cor']; ?></td>
                <td width="80"><?php echo $dados['categoria']; ?></td>
                <td width="80"><?php echo $dados['valor']; ?></td>
            </tr>

        </tbody>

    <?php

    }

    ?>

</table>

    <?php
    }
    ?>

</body>
</html>