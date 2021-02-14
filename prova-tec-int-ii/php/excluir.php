<?php

        include "conexao.php";

        $id = $_POST['id'];
        
        

        $SQL = "DELETE FROM camisetas WHERE id = $id ";

        $db->query($SQL) or die("Query Falhou");

        header("Location: manage.php");

?>

