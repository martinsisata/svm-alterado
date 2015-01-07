<?php include_once 'validarsessao.php';?>
<?php
$idFuncionario   = 10;
$nomeFuncionario = "Manuel Cambota";
$dataNascimento  = "26/03/1989";
$bI				 = "0015499LA039";
$telefone		 = "925584253";
$Morada			 = "Viana";
$perfil			 = 0;
$data = explode("/", $dataNascimento);
$data = array_reverse($data);
$dataNascimento = implode("-", $data);

include_once 'fontes/conexao.php';

$sql = "update funcionario set 
		nomeFuncionario = '".$nomeFuncionario."', 
		dataNascimento  = '".$dataNascimento."', 
		bI              = '".$bI."',
		telefone        = '".$telefone."', 
		Morada          = '".$Morada."', 
		perfil          = ".$perfil."
		where idFuncionario = '".$idFuncionario."'";

if (mysql_query($sql, $conn)) 
{
	echo "Actualizado";
}else
{
	echo "Erro ao Actualizar<br>$sql";
}

?>