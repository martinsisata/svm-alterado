<?php include_once 'validarsessao.php';
$id = $_GET ['id'];
include_once 'fontes/conexao.php';
$sql = "select nomeMedicamento from medicamento where idMedicamento =".$id."";
$result = mysql_query($sql,$conn);
$nomeBd = mysql_fetch_array($result);
$nome2 = $nomeBd ['nomeMedicamento'];

?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="home - Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            <?php
                //Barra topo do sistema
                require_once('template/topo.inc');
                
                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //Barra de menus
                require_once('template/barra-menus.inc');
            ?>
            
           
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Tem certesa que quer apagar...</h1>
                    <br />
                    <br />
                    
                    <!--Formulario da nova venda-->
                    <form name="formNovaVenda" method="get" action="delete.php">
                        <div class="tableRowBrancoBrilho">
                            
                            <label style="color:#c45454; padding:20px">
                                Nome do produto <?php echo strtoupper($nome2); ?>
                            </label>
                        </div>
                        <br />
                        
                        <br />
                        <br />
                        <a href="manutencao-produtos.php" class="bntAzul"><label>Cancelar</label></a>
                        <input name="id" type="hidden"  value="<?php echo $id; ?>">
                        <input type="submit" value="Apagar" class="bntVermelho" />
                    </form>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                </div><!--Fim zonaConteudo-->
                
            </session>

            <?php
                //Rodape do sistema
                require_once('template/footer.inc');
            ?>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>