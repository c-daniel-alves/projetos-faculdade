<?php

        include "conexao.php";

        $nome_estampa = $_POST['nome_estampa'];
        $cor =  $_POST['cor'];
        $categoria = $_POST['categoria'];
        $valor = $_POST['valor'];


        $SQL = "INSERT INTO camisetas (nome_estampa, cor, categoria, valor)
                VALUES ('$nome_estampa','$cor','$categoria','$valor') ";

        $db->query($SQL) or die("Query Falhou");

        header("Location: manage.php")

?>

