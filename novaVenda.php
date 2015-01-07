<meta charset="utf-8">
<?php include_once 'validarsessao.php';
error_reporting(0);
$idFunc = $_SESSION["id"];
$descricao       ="1 uma caixa";
$quantidade      = $_GET ['qtd'];
$idMedicamento   = $_GET ['id'];
$idFuncionario   = $idFunc;
$data = date('Y-m-d');
include_once 'fontes/conexao.php';

if ($quantidade<0) {
	print "<script> 
alert ('Erro: Por favor não meter número negativo na Quantidade');
location.href='venda.php?';
    </script>";
} else {
	//Buscar o preço do produto a ser vendido
$buscarPreco = "select preco, quantidade from medicamento where idMedicamento=".$idMedicamento."";
$resulte = mysql_query($buscarPreco,$conn);
$row = mysql_fetch_array($resulte);
$precoUnitario = $row [0];
//Verificar a quantidade existente
$quantidadeExistente = $row [1];

if ($quantidadeExistente >=$quantidade) {
$quantidadeActualizada = $quantidadeExistente - $quantidade;

	$descontarQtd ="update medicamento set quantidade =".$quantidadeActualizada."
	where idMedicamento =".$idMedicamento."";
if (mysql_query($descontarQtd,$conn)) {
		//Calcular o total
$total = $precoUnitario * $quantidade;

//Inserir na base de dado a venda feita 

$sql = "insert into venda (precoUnitario,descricao, quantidade,total, idMedicamento, idFuncionario, dataVenda) 
values('".$precoUnitario."','".$descricao."',".$quantidade.",'".$total."',".$idMedicamento.", ".$idFuncionario.", '".$data."')";

if (mysql_query($sql, $conn)) 
{
	print "<script> 
alert ('venda efectuado com sucesso');
location.href='venda.php?';
    </script>";
}else
{
	echo "Erro ao Gravar<br>$sql";
}

}


}else
{
	print "<script> 
alert ('Produto não tem disponível ou a Quantidade pretendidade é superior a existente');
location.href='venda.php?';
    </script>";
}

}

?>