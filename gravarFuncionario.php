<?php include_once 'validarsessao.php';?>
<?php
error_reporting(0);
$nomeFuncionario = $_POST ['nome'];
$dataNascimento  = $_POST ['dataNasc'];
$bI				 = $_POST ['bI'];
$telefone		 = $_POST ['tel'];
$Morada			 = $_POST ['morada'];
$perfil			 = $_POST ['perfil'];
$username		 = $_POST ['sobreNome'];
$senha 			 = "1234";
$data = explode("/", $dataNascimento);
$data = array_reverse($data);
$dataNascimento = implode("-", $data);

include_once 'fontes/conexao.php';

$sql = "insert into funcionario (nomeFuncionario, dataNascimento, bI, telefone, Morada, perfil, username, senha) values('".$nomeFuncionario."','".$dataNascimento."', '".$bI."', '".$telefone."', '".$Morada."', ".$perfil.", '".$username."', '".$senha."')";

if (mysql_query($sql, $conn)) 
{
	print "<script> 
alert ('Gravado com Sucesso');
location.href='novo-funcionario.php?';
    </script>";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

?>