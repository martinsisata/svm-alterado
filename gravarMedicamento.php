<?php include_once 'validarsessao.php';
error_reporting(0);
$nomeMedicamento   = $_POST ['nome'];
$preco             = $_POST ['preco'];
$idTipoMedicamento = $_POST ['tipo'];
$quantidade        = $_POST ['qtd'];
$idFuncionario     = $_SESSION ['id'];

include_once 'fontes/conexao.php';

$sql = "insert into medicamento (nomeMedicamento,preco, idTipoMedicamento,quantidade, idFuncionario) 
values('".$nomeMedicamento."','".$preco."',".$idTipoMedicamento.",".$quantidade.",".$idFuncionario.")";

if (mysql_query($sql, $conn)) 
{
	print "<script> 
alert ('Medicamento $nomeMedicamento gravado com Sucesso');
location.href='novo-produto.php?';
    </script>";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

?>