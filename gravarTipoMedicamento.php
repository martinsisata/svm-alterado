<?php include_once 'validarsessao.php';
error_reporting(0);
$func = $_SESSION['id'];
$nomeTipoMedicamento = $_POST['tipo'];
$idFuncionario       = $func ;

include_once 'fontes/conexao.php';

$sql = "insert into tipoMedicamento (nomeTipoMedicamento,idFuncionario) values('".$nomeTipoMedicamento."',".$idFuncionario.")";

if (mysql_query($sql, $conn)) 
{
	print "<script> 
alert ('Tipo de Medicamento $nomeTipoMedicamento gravado com Sucesso');
location.href='novo-tipo-produto.php?';
    </script>";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

?>