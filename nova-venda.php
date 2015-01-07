<?php include_once 'validarsessao.php';
error_reporting(0);
include_once 'fontes/conexao.php';
$sql = "SELECT * FROM getMedicamentos WHERE id =".$_GET['id'].""; 
$result = mysql_query($sql,$conn);
$dadosMedicamentos = mysql_fetch_array($result);


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
                    <h1>Nova venda</h1>
                    <br />
                    <br />
                    
                    <!--Formulario da nova venda-->
                    <form name="formNovaVenda" method="get" action="novaVenda.php">
                        <div class="tableRowBrancoBrilho">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
                            <label style="color:#c45454; padding:20px ">
<?php echo $dadosMedicamentos ['nome'];  ?></label>
                        </div>
                        <br />
                        
                        <input type="number" class="textBoxSmall" name="qtd" required />
                        <br />
                        <br />
                        <input type="submit" name="bntSubmit" value="Vender" class="bntVermelho" />
                    </form>
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