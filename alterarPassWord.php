<?php include_once 'validarsessao.php';
error_reporting(0);
$idFuncionario   = $_SESSION ['id'];
$senha 			 = $_POST ['nova'];

include_once 'fontes/conexao.php';

$sql = "update funcionario set 
		senha = '".$senha."'
		where idFuncionario = '".$idFuncionario."'";

if (mysql_query($sql, $conn)) 
{
	print "<script> 
alert ('Password Actualizado com sucesso');
location.href='home.php?';
    </script>";
}else
{
	echo "Erro ao Actualizar<br>$sql";
}

?>