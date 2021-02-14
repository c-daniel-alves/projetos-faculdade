<?php

        include "conexao.php";

        $id = $_POST['id'];
        $nome_estampa = $_POST['nome_estampa'];
        $cor =  $_POST['cor'];
        $categoria = $_POST['categoria'];
        $valor = $_POST['valor'];
        

        $SQL = "UPDATE camisetas set nome_estampa = '$nome_estampa', cor = '$cor', categoria = '$categoria', valor = $valor  WHERE id = $id ";

        $db->query($SQL) or die("Query Falhou");

        header("Location: manage.php");

?>

