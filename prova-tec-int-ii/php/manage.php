<?php

    include "conexao.php";

    $SQL = "SELECT * FROM camisetas ORDER BY id";

   $produtos = $db->query($SQL) or die("ERRO NA BUSCA DE PRODUTOS");





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles/globals.css">

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
    z-index:9999;
    position: relative;
    font-size: 80px;
    text-align: center;
    

}
table{
    align-items: center;
   

}


tr{
    height: 40px;
    width: 30px;
    font-size: 30px;
     ;
}
td{
    width: 350px;
    text-align: center;
    font-size: 25px;
    
}
.celulas:hover{
    background: #F0E68C;
    transition: 0.3s;

}
.bt-home button{
    z-index:9999;
    background-color: #FAB919;
    font-size: 20px;
    position: relative; top: -240px; left: 20px;
}


.cadastro button {
    z-index:7999;
    background-color: #FAB919;
    font-size: 20px;
    position: relative; top: 15px; left: 150px;

}
button:hover{
    background: #F0E68C;
    transition: 0.3s;

}

    </style>

</head>
<body>
<div class="cadastro">
    <a href="cadastros.php"><button>Cadastrar novos produtos</button></a><br><br>   
</div>

   <?php
        if($produtos->num_rows ==0){
            echo"<p>Nenhum Produto Cadastrado</p>";

        }
        else{
    ?>
    
    <div id="tabelas">
        

    <table> 
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da estampa</th>
                <th>Cor</th>
                <th>Tamanho</th>
                <th>Valor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($dados = $produtos->fetch_assoc()){

                

            ?>

            <tr class="celulas">
                <td><?php echo $dados['id'];?></td>
                <td width="300"><?php echo $dados['nome_estampa'];?></td>
                <td width="80"><?php echo $dados['cor'];?></td>
                <td width="80"><?php echo $dados['categoria'];?></td>
                <td width="80"><?php echo $dados['valor'];?></td>    
                <td>
                    <a href="editar_cadastro.php?id=<?php echo $dados['id']; ?>">Editar</a>
                    <a href="excluir_cadastro.php?id=<?php echo $dados['id']; ?>">Excluir</a>
                </td>
            </tr>
            <?php
                }
            ?>

        </tbody>


        

    </table>


    </div>
    
<?php

        }
?>
<div class="bt-home">
    <a href="/prova/index.html"><button>Home</button></a> 

</div>

</body>
</html>