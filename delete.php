<?php
error_reporting(0);
    $id = $_GET["id"];
    
    $sql = "delete from medicamento where idMedicamento = ".$id;
    
    include_once 'fontes/conexao.php';
    
    if(mysql_query($sql,$conn)){
	print "<script> 
alert ('Ficheiro apagado com sucesso');
location.href='manutencao-produtos.php';
    </script>";
    }else{
        echo "Erro ao deletar!";
    }
    
    mysql_close($conn);

?>

