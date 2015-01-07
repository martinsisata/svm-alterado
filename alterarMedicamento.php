<?php include_once 'validarsessao.php';

$idMedicamento     = $_POST ['id'];
$nomeMedicamento   = $_POST ['nomeProduto'];
$preco             = $_POST ['preco'];
$idTipoMedicamento = $_POST ['tipo'];
$quantidade        = $_POST ['quantidade'];
$idFuncionario     = $_SESSION ['id'];

include_once 'fontes/conexao.php';

$sql = "update medicamento set
		nomeMedicamento   ='".$nomeMedicamento."',
		preco             ='".$preco."', 
		idTipoMedicamento =".$idTipoMedicamento.",
		quantidade        =".$quantidade."
		where idMedicamento =".$idMedicamento."
		";

if (mysql_query($sql, $conn)) 
{
	print "<script> 
alert ('Medicamento $nomeMedicamento Editado com Sucesso');
location.href='manutencao-produtos.php';
    </script>";
}else
{
	echo "Erro ao Actualizar<br>$sql";
}

?>