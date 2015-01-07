<?php include_once 'validarsessao.php';?>
<?php
$idTipoMedicamento     = 4;
$nomeTipoMedicamento   = "outro";


include_once 'fontes/conexao.php';

$sql = "update tipoMedicamento set
		nomeTipoMedicamento   ='".$nomeTipoMedicamento."'
		where idTipoMedicamento =".$idTipoMedicamento."
		";

if (mysql_query($sql, $conn)) 
{
	echo " Actualizado com sucesso!";
}else
{
	echo "Erro ao Actualizar<br>$sql";
}

?>