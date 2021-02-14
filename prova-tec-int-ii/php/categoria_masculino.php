<?php

    include "conexao.php";

    $SQL = "SELECT * FROM `camisetas` WHERE `categoria` LIKE 'Masculino'";

    $camisetas = $db->query($SQL) or die("Erro na busca dos produtos");

    $total_registros = $camisetas->num_rows;

?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>

    <style>

body{
    background: #EFEFEF;
    
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

.footer {
    background: #FAB919;
    height: 200px;
    display: flex;
    position: relative; top: -520px;
}

#tabela {
    position: relative; top: 150px;

}
        



h1{
    z-index:8999;
    position: relative;
    font-size: 80px;
    text-align: center;
    

}
table{
    align-items: center;
   

}


tr{
    height: 60px;
    width: 50px;
    font-size: 50px;
     ;
}
td{
    width: 350px;
    text-align: center;
    font-size: 30px;
    
}
.celulas:hover{
    background: #F0E68C;
    transition: 0.3s;

}
button{
    z-index:9999;
    background-color: #FAB919;
    font-size: 20px;
    position: relative; top: -200px; left: 20px;
}

button:hover{
    background: #F0E68C;
    transition: 0.3s;


}
    </style>

</head>
<body>

<h1>Roupas Masculinas</h1>

    <?php

    if ($total_registros == 0) 
    {

        echo "<p>Nenhum produto cadastrado</p>";

    }
    else
    {

    ?>
<div id="tabela">

<table>
        <thead>
            <tr>                
                <th>Produto</th>
                <th>Cor</th>
                <th>valor</th>
            </tr>
        </thead>
        <tbody>

        <?php
            while ($dados = $camisetas->fetch_assoc())
            {
        ?>

            <tr class="celulas">                
                <td width="300"><?php echo $dados['nome_estampa']; ?></td>
                <td width="80"><?php echo $dados['cor']; ?></td>                
                <td width="80"><?php echo $dados['valor']; ?></td>
            </tr>

        </tbody>

    <?php

    }

    ?>

</table>


</div>
     

    <?php
    }
    ?>
   <a href="/prova/produtos.html"><button>Produtos</button></a> 
  <div class="footer"></div>

</body>
</html>