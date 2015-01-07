<?php include_once 'validarsessao.php';
include_once 'fontes/conexao.php';
$sql = "select *, tipoMedicamento.idTipoMedicamento as idTipo, tipoMedicamento.nomeTipoMedicamento as tipo from medicamento, tipoMedicamento where medicamento.idTipoMedicamento = tipoMedicamento.idTipoMedicamento and idMedicamento=".$_GET['id']."";
$result = mysql_query($sql,$conn);
$linha  = mysql_fetch_array($result);
?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            
            <?php
                //topo do sistema
                require_once('template/topo.inc');

                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //barra de menus
                require_once('template/barra-menus.inc');
            ?>
    
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Alterar produto</h1>
                    <br />
                    <br />
                    <!--Formulario de login-->
                    <form name="formLogin" method="post" action="alterarMedicamento.php">
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <label>Nome do produto</label>
                                    <br />
                                    <input type="text" name="nomeProduto" value="<?php echo $linha ['nomeMedicamento']; ?>" class="textBoxNormal" />
                                    <input type="hidden" name="id" value="<?php echo $linha ['idMedicamento']; ?>" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Preço (Só números)</label>
                                    <br />
                                    <input type="number" name="preco" value="<?php echo $linha ['preco']; ?>" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Tipo</label>
                                    <br />
                            <!--Buscar da base de dados os produtos -->
                                    <select name="tipo" class="comboBoxNormal" required>
                                    <option value="<?php echo $linha ['idTipo']; ?>"><?php echo $linha ['tipo']; ?></option>
<?php
include_once 'fontes/conexao.php';
$tipoMedicamento= "select * from tipoMedicamento";
$resulta= mysql_query($tipoMedicamento,$conn);
while ($linha2 = mysql_fetch_array($resulta)) {
    

    ?>
        <option value="<?php echo $linha2 ['0'];?>"><?php echo $linha2 ['1'];?></option>
        <?php
    }
        ?>
                                    </select>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Quantidade (Só números)</label>
                                    <br />
                                    <input type="number" name="quantidade" value="<?php echo $linha ['quantidade']; ?>" class="textBoxNormal" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br />
                                    <center>
                                        <a href="manutencao-produtos.php" class="bntAzul"><label>Cancelar</label></a>
                                        <input type="submit" name="bntSubmit" value="Alterar" class="bntVermelho" />
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    <br />
                    <br />
                </div><!--Fim zonaConteudo-->
                
            </session>
           
            
            <!--Espaçamento parao rodape-->
            <br />
            <br />
            <br />
            <!--Rodape padrao-->
            <footer id="rodape">
                <p>Todos direitos reservados.2014</p>
            </footer>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>