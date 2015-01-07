<?php
error_reporting(0);
	include_once 'fontes/conexao.php';
    session_start();
    $nome = $_SESSION["nome"];
    $dataActual = date('d-m-Y');
    $hora = date('H:i');

            $idFuncionario = $_SESSION ['id'];
            $saida = "insert into controleUser values (null,2,'".$dataActual."','".$hora."',".$idFuncionario.") ";
if (mysql_query($saida,$conn)) {
	    session_destroy();

    print"<script>
    alert('Sr. $nome Obrigado por utilizar o sistema!')
    location.href='index.php?pg=login';
    </script>";
}


?>
