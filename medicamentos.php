<meta charset="utf-8">
<?php
include_once 'validarsessao.php';
error_reporting(0);
include_once 'fontes/conexao.php';
	 $sql = "SELECT * FROM getMedicamentos WHERE nome like '".$_GET['busca']."%' order by nome"; 

$result = mysql_query($sql,$conn);

$conteudo="";
?>  

                            <tr class="tableHeader">
                                <td>
                                    NOME DO PRODUTO
                                </td>
                                <td>
                                    PRE&Ccedil;O
                                </td>
                                <td>
                                    TIPO
                                </td>
                                <td>
                                    QUANTIDADE
                                </td>
                                <td>
                                    AC&Ccedil;&Atilde;O
                                </td>
                            </tr>

<?php

#while ($linha=mysql_fetch_array($result)) 
$row=mysql_num_rows($result);
if($row < 1) {
    $conteudo = "Nenhum produto encontrado";
} else {


     for($i=0; $i<$row; $i++){
        $linha=mysql_fetch_array($result);
        $n = $i%2;
        if($n == 1)
        {
            $estilo = 'tableRowBrancoBrilho';
        }
        else
        {
            $estilo = 'tableRowBrancoFosco';
            }

	$conteudo .= 	"<tr class='$estilo'>
						<td>". $linha['nome'] ."</td>
						<td>". $linha['preco'] ." Kz</td>
						<td>". $linha['tipo']."</td>
						<td>". $linha['qtd'] ."</td>
<td><a href='nova-venda.php?id=". $linha['id']."' class='bntVermelhoSmall'style='color:#fff'><labe>Vender</labe></a></td>

                        "
                        ?>
					</tr>
					 <?php
					"";

}

}
echo $conteudo;
?>
